<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /*
    * Display a listing of the resource.
    */
    // クイズのデータを取得してindex.blade.phpに渡す
    public function index()
    {
        $quizzes = Question::getQuizData();
        return view('quizzes.index', compact('quizzes'));
    }

    // 新規作成画面を表示する
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // クイズのデータを保存する
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $question = new Question();
        $question::add($data);

        session()->flash('message', 'クイズを作成しました');
        return redirect()->route('quizzes.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $question_instance = new Question();
            $question = $question_instance->findOrFail($id);
            // クイズのデータを取得してshow.blade.phpに渡す
            return view('quizzes.show', compact('question'));
        } catch (\Exception $e) {
            session()->flash('message', 'クイズが見つかりませんでした');
            return redirect()->route('quizzes.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $question_instance = new Question();
            $question = $question_instance->findOrFail($id);
            // クイズのデータを取得してedit.blade.phpに渡す
            return view('quizzes.edit', compact('question'));
        } catch (\Exception $e) {
            session()->flash('message', 'クイズが見つかりませんでした');
            return redirect()->route('quizzes.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $question = Question::findOrFail($id);
        $question->text = $data['text'];
        $question->save();

        foreach ($data['option'] as $key => $option) {
            $opt = $question->options()->findOrFail($data['optionId'][$key]);
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
    return redirect()->route('quizzes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        session()->flash('message', 'クイズを削除しました');
        return redirect()->route('quizzes.index');
    }
}
