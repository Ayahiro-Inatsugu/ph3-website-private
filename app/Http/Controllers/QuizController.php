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
    public function index()
    {
        return view('quizzes.index');
    }

    /**
     * Show the form for creating a new resource.
     * @param string $question
     * @param string $first
     * @param string $second
     * @param string $third
     * @param int $answer
     */

    // 新規作成画面を表示する
    public function create()
    {
        return view('quizzes.create');
    }

    public function createQuiz($question, $first, $second, $third, $answer)
    {
        Question::create([
            'text' => $question,
            'options' => [
                ['text' => $first, 'is_correct' => false],
                ['text' => $second, 'is_correct' => false],
                ['text' => $third, 'is_correct' => false]
            ],
        ]);

        // $answerの値によってoptionsのis_correctを変更する
        $question = Question::latest()->first();
        $question->options[$answer - 1]->is_correct = true;
        $question->save();

        return redirect()->route('quizzes.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
