<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'id'        => 1,
                'nombre'    => 'Admin',
                'apaterno'  => 'Sistema',
                'amaterno'  => '',
                'email'     => 'admin@api.com',
                'password'  => '$2y$10$Password123',
                'telefono'  => '1234567890',
                'activo'    => 1,
                'created_at'=> null,
                'updated_at'=> null,
            ],
            [
                'id'        => 2,
                'nombre'    => 'Juan',
                'apaterno'  => 'Perez',
                'amaterno'  => 'Lopez',
                'email'     => 'juan@api.com',
                'password'  => '$2y$10$Password123',
                'telefono'  => '1111111111',
                'activo'    => 1,
                'created_at'=> null,
                'updated_at'=> null,
            ],
            [
                'id'        => 30,
                'nombre'    => 'juannito',
                'apaterno'  => 'perez',
                'amaterno'  => 'sanchez',
                'email'     => 'juan@gmail.com',
                'password'  => '12345',
                'telefono'  => '82365401982',
                'activo'    => 1,
                'created_at'=> '2026-03-20 03:42:03',
                'updated_at'=> '2026-03-20 03:45:36',
            ],
            [
                'id'        => 32,
                'nombre'    => 'adirana',
                'apaterno'  => 'perez',
                'amaterno'  => 'olivo',
                'email'     => 'adraian@gmail.com',
                'password'  => '1233456',
                'telefono'  => '2218732183',
                'activo'    => 1,
                'created_at'=> '2026-03-20 03:45:58',
                'updated_at'=> '2026-03-20 03:45:58',
            ],
        ]);
    }
}
