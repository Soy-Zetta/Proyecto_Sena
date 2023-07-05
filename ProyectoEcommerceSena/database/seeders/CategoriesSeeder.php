<?php

namespace Database\Seeders;

use App\Models\Admin\categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        categoria::create([
            'nombre' => 'monitores',
            'descripcion' => 'monitores'
        ]);

        categoria::create([
            'nombre' => 'mouse',
            'descripcion' => 'mouse'
        ]);

        categoria::create([
            'nombre' => 'teclado',
            'descripcion' => 'teclados'
        ]);
        categoria::create([
            'nombre' => 'audifonos',
            'descripcion' => 'audifonos'
        ]);

        categoria::create([
            'nombre' => 'camaras',
            'descripcion' => 'camaras'
        ]);


    }
}