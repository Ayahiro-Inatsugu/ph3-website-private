<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    // クイズのデータをwithで取得する
    static function getQuizData()
    {
        return self::with('options')->get();
    }

    // レコードを追加
    public function add(array $data)
    {
        $question = new Question();
        $question->text = $data['text'];
        $question->save();

        foreach ($data['options'] as $option) {
            $question->options()->create([
                'text' => $option['text'],
                'is_correct' => $option['is_correct'],
            ]);
        }

        return $question;
    }
}
