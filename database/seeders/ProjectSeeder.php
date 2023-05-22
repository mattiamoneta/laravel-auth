<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20;$i++){
            $newProject = new Project();
            $newProject->name = $faker->text(10);
            $newProject->description = $faker->sentence(5);
            $newProject->thumb = $faker->text(30);
            $newProject->save();
        }
    }
}
