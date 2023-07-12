<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Categoria::class;

    public function definition(): array
    {
        $categorias = ['Facturacion', 'Problema técnico', 'Terminal'];
        return [
            'nombre' => fake()->randomElement($categorias),
            // 'nombre' => fake()->name(),
            'descripcion' => fake()->text(),
        ];
    }
}
