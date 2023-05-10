<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleIds = \App\Models\Role::all()->pluck('id');
    User::factory()
        ->count(10)
        ->create([
            'role_id' => $roleIds->shuffle()->first(),
        ]);
    }
}