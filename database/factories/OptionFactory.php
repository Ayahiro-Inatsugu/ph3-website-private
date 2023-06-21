<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question;
use App\Models\Option;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Option>
 */
class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Option::class;

    public function definition(): array
    {
        return [
            // ここでOptionのデータを定義
            'text' => $this->faker->word,
            'is_correct' => 0,
        ];
    }
}
