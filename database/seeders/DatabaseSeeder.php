<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::factory()->create(['name' => 'Categorie 1']);
        Category::factory()->create(['name' => 'Categorie 2']);
        Category::factory()->create(['name' => 'Categorie 3']);
        Category::factory()->create(['name' => 'Categorie 4']);
        Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Examination', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'En cours', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Mis en place', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Clos', 'classes' => 'bg-red text-white']);
        Idea::factory(30)->create();
    }
}
