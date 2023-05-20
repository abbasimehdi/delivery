<?php

namespace Database\Factories;

use App\Models\Consignment;
use App\Models\Rider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consignment>
 */
class ConsignmentFactory extends Factory
{
    protected $model = Consignment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'status' => fake()->boolean,
            'rider_id' => self::factoryForModel(Rider::class),
            'code' => fake()->unique()->numberBetween(1000, 9999),
            'delivery_start' => fake()->dateTime(),
            'delivery_end' => fake()->dateTime(),
        ];
    }
}
