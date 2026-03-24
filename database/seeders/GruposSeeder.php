<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('grupos')->insert([
            [
                'id'         => 1,
                'nombre'     => 'SIS-101',
                'semestre'   => 1,
                'carrera_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id'         => 13,
                'nombre'     => 'SIE-201',
                'semestre'   => 2,
                'carrera_id' => 1,
                'created_at' => '2026-03-10 04:48:39',
                'updated_at' => '2026-03-10 04:48:39',
            ],
        ]);
    }
}
