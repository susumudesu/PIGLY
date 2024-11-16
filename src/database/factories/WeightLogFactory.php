<?php

namespace Database\Factories;

use App\Models\WeightLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{

    protected $model = WeightLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date,
            'weight' => $this->faker->randomFloat(1,40,45),
            'calories' => $this->faker->numberBetween(1000,2000),
            'exercise_time' => $this->faker->time('H:i'),
            'exercise_content' => $this->faker->realText(20),
        ];
    }
}
