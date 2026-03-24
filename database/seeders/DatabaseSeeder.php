<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            UsuariosSeeder::class,
            CarrerasSeeder::class,
            GruposSeeder::class,
            MateriasSeeder::class,
            AsignacionesSeeder::class,
        ]);
    }
}
