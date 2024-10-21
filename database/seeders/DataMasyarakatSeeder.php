<?php

namespace Database\Seeders;

use App\Models\DataMasryarakat;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataMasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            DataMasryarakat::create([
                'alamat' => $faker->address(),
                'desa' => $faker->address(),
                'nama' => $faker->name,
                'jml_keluarga' => $faker->randomNumber(),
                'kondis_bayi' => $faker->randomNumber(),
                'usia_bayi' => $faker->randomNumber(),
                'tipe_persalinan' => $faker->randomNumber(),
                'kondisi_keluarga' => $faker->randomNumber(),
                'no_telp' => $faker->randomNumber(),
                'usia' => $faker->randomNumber(),
            ]);

        }
    }
}
