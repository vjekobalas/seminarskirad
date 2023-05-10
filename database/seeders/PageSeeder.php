<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use App\Models\Menu;
use App\Models\Page;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{

    protected $faker;

    public function __construct()
    {
        $this->faker = FakerFactory::create();
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     // Get the three menus created in the MenuSeeder 
     //as pages must be associated with valid menus which in turn
     //must be associated with valid categories as the menu name=category name
     $menus = Menu::take(3)->get();

     foreach ($menus as $menu) {
         Page::create([
             'title' => 'Page for ' . $menu->name,
             'content' => $this->faker->paragraph,
             'image_path' => null,
             'menu_id' => $menu->id,
         ]);
     }
    }
}