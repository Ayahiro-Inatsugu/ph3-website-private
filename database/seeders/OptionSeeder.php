<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Option::create([
            'question_id' => 1,
            'text' => 'こうわ',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 1,
            'text' => 'たかわ',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 1,
            'text' => 'たかなわ',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 2,
            'text' => 'かめいど',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 2,
            'text' => 'かめど',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 2,
            'text' => 'かめと',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 3,
            'text' => 'かゆまち',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 3,
            'text' => 'おかとまち',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 3,
            'text' => 'こうじまち',
            'is_correct' => true,
        ]);
    }
}
