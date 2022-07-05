<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{

    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model' => $this->faker->word(),
            'brand' => $this->faker->word(),
            'year' => now(),
            'max_speed' => $this->faker->randomNumber(),
            'is_automatic' => $this->faker->boolean(),
            'engine' => $this->faker->word(),
            'number_of_doors' => $this->faker->randomNumber(5)
        ];
    }
}
