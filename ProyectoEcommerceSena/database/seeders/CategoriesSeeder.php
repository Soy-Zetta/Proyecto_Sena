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
            'descripcion' => 'zetta@gmail.com'
        ]);

        categoria::create([
            'nombre' => 'mouse',
            'descripcion' => 'stiven@gmail.com'
        ]);

        categoria::create([
            'nombre' => 'portatil',
            'descripcion' => 'victor@gmail.com'
        ]);


    }
}