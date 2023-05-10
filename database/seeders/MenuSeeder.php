<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::factory()->count(3)->create(); //3 menus will be seeded from generated categories
    }
}
