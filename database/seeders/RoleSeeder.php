<?php

namespace Database\Seeders;
use App\Models\Role;
use Database\Factories\RoleFactory;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'editor',
            'slug' => 'editor',
            'description' => 'Editor',
            'is_deletable' => true,
        ]);

        Role::create([
            'name' => 'viewer',
            'slug' => 'viewer',
            'description' => 'Viewer',
            'is_deletable' => true,
        ]);

        Role::create([
            'name' => 'publisher',
            'slug' => 'publisher',
            'description' => 'publisher',
            'is_deletable' => true,
        ]);

        Role::create([
            'name' => 'writer',
            'slug' => 'writer',
            'description' => 'writer',
            'is_deletable' => true,
        ]);

        // Create fake roles using the factory
        Role::factory()->count(5)->create();
    }
    
}
