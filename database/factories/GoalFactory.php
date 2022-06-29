<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'goal_title' => $this->faker->words(6,true),
            'goal_cash_total'=> $this->randomFloat(2,10,300),
            'goal_date'=> $this->faker->words(2,true),
            'goal_cash_today'=> $this->randomFloat(2,10,300),
        ];
    }
}
