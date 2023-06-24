<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $quiz = new self();
        // 画像アップロード
        $image = $data['image'];
        
        if ($image) {
            $dir = 'img/quizzes';
            $image_extension = $image->getClientOriginalExtension();
            $file_name = uniqid() . '.' . $image_extension;
            
            Storage::disk('public')->put($dir . '/' . $file_name, File::get($image));
            $quiz->image = $file_name;
        }
        $quiz->text = $data['question'];
        $quiz->save();

        $quiz_id = $quiz->id;

        foreach ($data['option'] as $key => $option) {
            $quiz->options()->create([
                'question_id' => $quiz_id,
                'text' => $option,
                'is_correct' => ((int)$data['answer'] === $key + 1),
            ]);
        };

        return;
    }
}
