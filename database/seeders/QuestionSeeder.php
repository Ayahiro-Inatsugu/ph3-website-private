<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Option;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Question::create([
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
        ]);

        Question::create([
            'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
        ]);

        Question::create([
            'text' => 'IoTとは何の略でしょう？',
        ]);

        Question::create([
            'text' => 'ゆうきの出身地はどこでしょう？',
        ]);

        Question::create([
            'text' => 'りょうがバイトしているのはどこでしょう？',
        ]);

        Question::create([
            'text' => 'たかぴろが一番得意な楽器は何でしょう？',
        ]);

        Question::factory()
            ->count(20) 
            ->create()
            ->each(function ($question) {
                // 各Questionに対して3つのis_correctが0のOptionを作成
                Option::factory()->count(3)->create(['question_id' => $question->id]);

                // 各Questionに対して1つのis_correctが1のOptionを作成
                Option::factory()->state(['is_correct' => 1])->create(['question_id' => $question->id]);
            });
    }
}
