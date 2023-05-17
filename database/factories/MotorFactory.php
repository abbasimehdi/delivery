<?php

namespace Database\Factories;

use App\Models\Motor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motor>
 */
class MotorFactory extends Factory
{
    protected $model = Motor::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->boolean,
            'rider' => fake()->unique()->name,
            'plate' => fake()->unique()->word(7),
        ];
    }
}
