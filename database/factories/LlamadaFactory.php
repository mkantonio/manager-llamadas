<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Telefono;
use App\Models\Eess;
use App\Models\Operador;
use App\Models\Estado;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Llamada>
 */
class LlamadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'telefono_id' => Telefono::all()->random()->id,
            'eess_id' => Eess::all()->random()->id,
            'operador_id' => Operador::all()->random()->id,
            'estado_id' => Estado::all()->random()->id,
            'categoria_id' => Categoria::all()->random()->id,
            'descripcion' => fake()->paragraph(),
        ];
    }
}
