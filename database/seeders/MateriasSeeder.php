<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materias')->insert([
            [
                'id'          => 1,
                'nombre'      => 'Programación',
                'descripcion' => 'Introducción a la programación',
                'creditos'    => 5,
                'carrera_id'  => 1,
                'created_at'  => null,
                'updated_at'  => null,
            ],
            [
                'id'          => 2,
                'nombre'      => 'Bases de Datos',
                'descripcion' => 'Modelo relacional y SQL',
                'creditos'    => 5,
                'carrera_id'  => 1,
                'created_at'  => null,
                'updated_at'  => null,
            ],
            [
                'id'          => 11,
                'nombre'      => 'apis',
                'descripcion' => 'introduccion apis',
                'creditos'    => 2,
                'carrera_id'  => 1,
                'created_at'  => '2026-03-10 04:47:52',
                'updated_at'  => '2026-03-10 04:47:52',
            ],
        ]);
    }
}
