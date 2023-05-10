<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;


    public function definition($role = null): array
    {

        //To simplify allocation of avatar, the application will
        //count number of avatar files in public/avatars and randomly
        //allocate an avatar
    

        $avatarCount = count(Storage::disk('public')->files('avatars'));

        //$adminEmail = 'admin@example.com'; admin email is of this form
        $userEmail = $this->faker->unique()->safeEmail;
        
        // If the user email domain is the same as the admin email domain,
        // add a random string to the username to make the email unique
        if (Str::endsWith($userEmail, '@example.com')) {
            $username = Str::before($userEmail, '@');
            $userEmail = $username . '_' . Str::random(5) . '@example.com';
        }

        if ($role) {
            $roleId = $role->id;
        } else {
            $roleId = Role::inRandomOrder()->first()->id;
        }
        
        
        return [
            'name' => $this->faker->name(),
            'surname' => $this->faker->lastName(),
            'email' => $userEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'avatar' => 'avatars/' . ($this->faker->numberBetween(1, $avatarCount)) . '.png',
            'last_login_at' => now(),
            'role_id' => $roleId,
        ];
    }
}