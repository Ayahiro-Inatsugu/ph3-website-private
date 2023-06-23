<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    // fillable models
    protected $fillable = [
        'text',
    ];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    // クイズのデータをwithで取得する
    static function getQuizData()
    {
        return self::with('options')->paginate(20);
    }

    // 論理削除した問題を含めて全てのクイズを取得する
    static function getQuizDataWithTrashed()
    {
        return self::with('options')->withTrashed()->paginate(20);
    }

    // レコードを追加
    public static function add(array $data)
    {
        $question = new Question();
        $question->text = $data['question'];
        dd($question);

        foreach ($data['option'] as $key => $option) {
            $question->options()->create([
                'question_id' => $question->id,
                'text' => $option,
                'is_correct' => ((int)$data['answer'] === $key + 1),
            ]);
        };

        return $question;
    }
}
