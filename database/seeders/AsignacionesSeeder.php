<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignacionesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('asignaciones')->insert([
            [
                'id'         => 1,
                'docente_id' => 2,
                'materia_id' => 1,
                'grupo_id'   => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
