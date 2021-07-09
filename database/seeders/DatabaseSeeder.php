<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
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
        User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.com'
        ]);
        User::factory(19)->create();

        Category::factory()->create(['name' => 'Categorie 1']);
        Category::factory()->create(['name' => 'Categorie 2']);
        Category::factory()->create(['name' => 'Categorie 3']);
        Category::factory()->create(['name' => 'Categorie 4']);

        Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Examination', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'En cours', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Mis en place', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Clos', 'classes' => 'bg-red text-white']);

        Idea::factory(100)->create();

        //generate unique votes , assurer que ideaid et userid sont uniques pour chaque ligne
        foreach (range(1, 20) as $user_id) {
            foreach (range(1, 100) as $idea_id) {
                if ($idea_id % 2 == 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
    }
}
