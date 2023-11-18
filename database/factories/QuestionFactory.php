<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question;
use App\Models\Option;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Question::class;
    
    public function definition(): array
    {
        return [
            // ここでQuestionのデータを定義
            'text' => $this->faker->sentence,
        ];
    }
}
