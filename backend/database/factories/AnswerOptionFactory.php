<?php

namespace Database\Factories;

use App\Models\AnswerOption;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @template TModel of \App\Models\AnswerOption
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class AnswerOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = AnswerOption::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
