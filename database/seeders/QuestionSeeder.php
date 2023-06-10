<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Question::create([
            'text' => 'この地名はなんて読む？：高輪',
        ]);

        Question::create([
            'text' => 'この地名はなんて読む？：亀戸',
        ]);

        Question::create([
            'text' => 'この地名はなんて読む？：麹町',
        ]);
    }
}
