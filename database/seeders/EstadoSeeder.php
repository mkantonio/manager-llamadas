<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Pendiente', 'descripcion' => 'Tarea todavia en estado Pendiente'],
            ['nombre' => 'Solucionado', 'descripcion' => 'Tarea todavia en estado Solucionado'],
            ['nombre' => 'Cerrado', 'descripcion' => 'Tarea todavia en estado Cerrado'],
        ];

        DB::table('estado')->insert($data);
    }
}
