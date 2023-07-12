<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Operador;
use App\Models\Estado;
use App\Models\Telefono;
use App\Models\Eess;
use App\Models\Llamada;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Categoria::factory(3)->create();
        Operador::factory(4)->create();
        $this->call([
            EstadoSeeder::class,
        ]);
        // Eess::factory(100)->create();
        // Telefono::factory(120)->create();

        Eess::factory(10)
            ->has(Telefono::factory()->count(3))
            ->create();
        Llamada::factory(200)->create();




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
