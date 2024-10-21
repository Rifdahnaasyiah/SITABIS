<?php

namespace Database\Seeders;

use App\Models\DataMasryarakat;
use App\Models\PhbsAnswer;
use App\Models\Quesioner;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PhbsAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        PhbsAnswer::create([
            'data_masryarakats_id' => DataMasryarakat::all()->random()->id,
            'quesioners_id' => Quesioner::all()->random()->id,
        ]);

        for ($i = 0; $i < 10; $i++) {
            $data = DataMasryarakat::all()->random()->id;
            for ($j = 0; $j < 10; $j++) {
                PhbsAnswer::create([
                    'data_masryarakats_id' => $data,
                    'quesioners_id' => Quesioner::all()->random()->id,
                ]);
            }

        }
    }
}
