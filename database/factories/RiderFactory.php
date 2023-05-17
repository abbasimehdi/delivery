<?php

namespace Database\Factories;

use App\Models\Rider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rider>
 */
class RiderFactory extends Factory
{
    protected $model = Rider::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'lastname' => fake()->lastname,
            'personnel_code' => fake()->unique()->numberBetween(10000, 99999),
            'status' => fake()->boolean,
        ];
    }
}
