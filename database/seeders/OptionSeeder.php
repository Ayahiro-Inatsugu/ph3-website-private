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
            'text' => '約79万人',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 1,
            'text' => '約28万人',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 1,
            'text' => '約183万人',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 2,
            'text' => 'INTECH',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 2,
            'text' => 'BIZZTECH',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 2,
            'text' => 'X-TECH',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 3,
            'text' => 'Internet of Things',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 3,
            'text' => 'Information on Tool',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 3,
            'text' => 'Integrate into Technology',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 4,
            'text' => '東京都港区',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 4,
            'text' => '埼玉県秩父市',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 4,
            'text' => '千葉県千葉市',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 5,
            'text' => 'ローソン',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 5,
            'text' => 'セブンイレブン',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 5,
            'text' => 'ファミリーマート',
            'is_correct' =>false,
        ]);

        Option::create([
            'question_id' => 6,
            'text' => 'ギター',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => 6,
            'text' => 'ドラム',
            'is_correct' => true,
        ]);

        Option::create([
            'question_id' => 6,
            'text' => 'ベース',
            'is_correct' => false,
        ]);
    }
}
