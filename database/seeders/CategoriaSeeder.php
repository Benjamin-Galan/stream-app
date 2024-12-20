<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Acción'],
            ['nombre' => 'Comedia'],
            ['nombre' => 'Drama'],
            ['nombre' => 'Ciencia Ficción'],
            ['nombre' => 'Terror'],
            ['nombre' => 'Romántica'],
            ['nombre' => 'Aventura'],
            ['nombre' => 'Crimen'],
            ['nombre' => 'Documental'],
            ['nombre' => 'Suspenso'],
        ]);
    }
}
