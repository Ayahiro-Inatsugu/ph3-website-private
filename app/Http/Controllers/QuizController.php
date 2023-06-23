<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class QuizController extends Controller
{
    /*
    * Display a listing of the resource.
    */
    // クイズのデータを取得してindex.blade.phpに渡す
    public function index()
    {
        $quizzes = Question::getQuizDataWithTrashed();
        return view('admin.index', compact('quizzes'));
    }

    // 新規作成画面を表示する
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // クイズのデータを保存する
    public function store(Request $request)
    {
        $data = $request->all();
        $quiz = new Question();
        $quiz::add($data);

        // 画像アップロード
        $image = $data['image'];

        if ($image) {
            $dir = 'public/img/quizzes';
            $image_extension = $image->getClientOriginalExtension();
            $file_name = $quiz->id . uniqid() . '.' . $image_extension;

            Storage::disk('public')->put($dir . '/' . $file_name, File::get($image));
            $quiz->image = $file_name;
        }
        
        $quiz->save();
        
        session()->flash('message', 'クイズを作成しました');
        return redirect()->route('admin.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $quizzes_instance = new Question();
            $quiz = $quizzes_instance->findOrFail($id);
            // クイズのデータを取得してshow.blade.phpに渡す
            return view('admin.show', compact('quiz'));
        } catch (\Exception $e) {
            session()->flash('message', 'クイズが見つかりませんでした');
            return redirect()->route('admin.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // クイズのデータを取得してedit.blade.phpに渡す
    public function edit(string $id)
    {
        try {
            $quizzes_instance = new Question();
            $quiz = $quizzes_instance->findOrFail($id);
            // クイズのデータを取得してedit.blade.phpに渡す
            return view('admin.edit', compact('quiz'));
        } catch (\Exception $e) {
            session()->flash('message', 'クイズが見つかりませんでした');
            return redirect()->route('admin.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    // クイズのデータを更新する
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $quiz = Question::findOrFail($id);
        $quiz->text = $data['text'];
        $quiz->save();

        foreach ($data['option'] as $key => $option) {
            $opt = $quiz->options()->findOrFail($data['optionId'][$key]);
            try {
                $opt->text = $option;
                $opt->is_correct = ((int)$data['answer'] === $key + 1);
                $opt->save();
            } catch (\Exception $e) {
                session()->flash('message', 'クイズの更新に失敗しました');
                $opt->delete();
            }
        }

    session()->flash('message', 'クイズを更新しました');
    return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // クイズのデータを削除する
    public function destroy(string $id)
    {
        $quiz = Question::findOrFail($id);
        try {
            $quiz->delete();
            session()->flash('message', 'クイズを削除しました');
            return redirect()->route('admin.index');
        } catch (\Exception $e) {
            session()->flash('message', 'クイズの削除に失敗しました');
            return redirect()->route('admin.index');
        }
    }
}
