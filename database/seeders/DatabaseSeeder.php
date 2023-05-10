<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(RoleSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(UserSeeder::class);

        //Categories are created first, then used for the menus and then
        //menus are used for association with the pages
        $this->call(CategorySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(PageSeeder::class);

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
