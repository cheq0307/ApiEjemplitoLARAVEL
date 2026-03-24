<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrerasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('carreras')->insert([
            [
                'id'          => 1,
                'nombre'      => 'Ingeniería en Sistemas',
                'descripcion' => 'Carrera tecnológica',
                'created_at'  => null,
                'updated_at'  => null,
            ],
        ]);
    }
}
