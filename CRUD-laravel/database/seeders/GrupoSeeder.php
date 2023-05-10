<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grupos = ['Grupo 051 - HERRAMIENTAS DE PROGRAMACION II','Grupo 053 - CALCULO DIFERENCIAL','Grupo 055 - GESTION EMPRESARIAL','Grupo 100 - INGLES 2','Grupo 350 - BASES DE DATOS II'];

        foreach ($grupos as $grupo) {
            DB::table('grupos')->insert([
                'nombre' => $grupo
            ]);
        }
    }
}
