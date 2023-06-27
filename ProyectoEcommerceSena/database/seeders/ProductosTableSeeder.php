<?php

namespace Database\Seeders;

use App\Models\Admin\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        								
        $productos = [
            [
                'nombre' => 'rampg12x',
                'codigo' => 1234,
                'descripcion' => 'ram Color Negro 16gb Cmsx16gx5m1a4800c40',
                'precio' => 300000,
                'existencias' => 15,
                'imagen' => 'ram.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'monitor',
                'codigo' => 12345,
                'descripcion' => 'monitor Color Negro pantalla led',
                'precio' => 900000,
                'existencias' => 15,
                'imagen' => '64963b521b209.jpg',
                'disponible' => 1,
                'categorias_id' => 2,
                'proveedores_id' => 2
               
            ],
            [
                'nombre' => 'portatil',
                'codigo' => 123456,
                'descripcion' => 'portatil Color Negro 16gb Cmsx16gx5m1a4800c40',
                'precio' => 800000,
                'existencias' => 15,
                'imagen' => '64962ebe73b87.webp',
                'disponible' => 1,
                'categorias_id' => 3,
                'proveedores_id' => 3
                
            ],
            // Agrega más productos aquí si es necesario
        ];
    
        foreach ($productos as $productoData) {
            producto::create($productoData);
 
        }

    } 
}
