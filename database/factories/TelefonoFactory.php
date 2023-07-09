<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Eess;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telefono>
 */
class TelefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'telefono' => fake()->numberBetween(70090100, 79090001),
            // 'eess_id' => function () {
            //     return Eess::factory()->create()->id;
            // },
        ];
    }
}
