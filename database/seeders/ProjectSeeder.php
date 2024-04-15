<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $data = [];

        for ($i = 0; $i < 9; $i++) {
            $data[] = [
                'img_url' => $faker->imageUrl,
                'name' => $faker->name,
                'subtitle' => $faker->sentence,
                'description' => $faker->text,
                'link' => 'http://' . $faker->domainName(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Project::insert($data);
    }
}
