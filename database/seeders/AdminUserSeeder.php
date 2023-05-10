<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'administrator',
            'slug' => 'administrator',
            'description' => 'Administrator',
            'is_deletable' => false,
        ]);

        $admin = User::create([
            'name' => 'Administrator',
            'surname' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
        ]);

        $admin->role()->associate($adminRole)->save();
    }
}
