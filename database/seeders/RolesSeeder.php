<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 2, 'nombre' => 'Docente'],
            ['id' => 3, 'nombre' => 'Estudiante'],
            ['id' => 5, 'nombre' => 'admininstrador'],
        ]);
    }
}
