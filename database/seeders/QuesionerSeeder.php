<?php

namespace Database\Seeders;

use App\Models\Quesioner;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Quesioner::create([
                'jawaban' => $faker->randomLetter()
            ]);

        }
    }
}
