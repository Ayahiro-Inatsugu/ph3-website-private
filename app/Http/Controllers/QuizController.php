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
        $question_model = new Question();
        $quizzes = $question_model->getQuizData();
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
    public function store(Request $request)
{
    $question = new Question();
    $question->text = $request->input('question');
    $question->save();

    $options = [
        $request->input('option_first'),
        $request->input('option_second'),
        $request->input('option_third')
    ];

    foreach ($options as $index => $optionText) {
        $option = new Option();
        $option->question_id = $question->id;
        $option->text = $optionText;
        $option->is_correct = ($request->input('answer') === "option_" . ($index + 1));
        $option->save();
    }

    session()->flash('message', 'クイズを作成しました');
    return redirect()->route('quizzes.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
