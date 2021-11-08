<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Animal;
        $a->name = "Leo";
        $a->weight = 66.2;
        $a->save();

        $animals = Animal::factory()->count(10)->create();
    }
}
