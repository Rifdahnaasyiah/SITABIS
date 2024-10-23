<?php

namespace Database\Seeders;

use App\Models\Quesioner;
use Illuminate\Database\Seeder;

class QuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyan = [
            'apakah kamu merokok ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'siapa kamu ?',
            'kamu tinggal dimana ?'
        ];

        for ($i = 0; $i < 10; $i++) {
            Quesioner::create([
                'jawaban' => $pertanyan[$i]
            ]);

        }
    }
}
