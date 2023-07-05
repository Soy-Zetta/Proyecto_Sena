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
                'nombre' => 'Monitor HP 23,8',
                'codigo' => 1234,
                'descripcion' => 'monitor HP ultradelgado con pantalla de micro-bordes y resolución Full HD. ',
                'precio' => 720000,
                'existencias' => 5,
                'imagen' => 'Monitor HP 23,8 Pulgadas M24f .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor HP V22 FHD',
                'codigo' => 1234,
                'descripcion' => 'Monitor HP V22 FHD colores reales gracias a la resolución Full HD y sistema anti reflectante.',
                'precio' => 499000,
                'existencias' => 5,
                'imagen' => 'Monitor HP 21,5 Pulgadas V22 .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor SAMSUNG Gaming ',
                'codigo' => 1234,
                'descripcion' => 'Monitor SAMSUNG Gaming de 27" pulgadas, con tasa de actualización de 165Hz, tiempo de respuesta de 1ms.',
                'precio' => 1200000,
                'existencias' => 5,
                'imagen' => 'Monitor SAMSUNG Gamer 27 pulgadas G320NL .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor SAMSUNG Smart',
                'codigo' => 12345,
                'descripcion' => 'el Monitor SAMSUNG Smart Display . Navega por la web, edita documentos y estudia, todo sin necesidad de una PC y cuidando tu salud ',
                'precio' => 1200000,
                'existencias' => 15,
                'imagen' => 'Monitor SAMSUNG 32 Pulgadas BM500 Smart Display.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 2
               
            ],
            [
                'nombre' => 'Monitor LG Gaming ',
                'codigo' => 123456,
                'descripcion' => 'Monitor LG Gaming de 24" pulgadas, tasa de refresco de 144Hz que permite a los jugadores ver rápidamente el próximo cuadro con imágenes más fluidas',
                'precio' => 850000,
                'existencias' => 15,
                'imagen' => 'Monitor LG Gamer 24 Pulgadas 24GN65R .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
                
            ],
            [
                'nombre' => 'Monitor Acer ',
                'codigo' => 1234,
                'descripcion' => 'Monitor Acer su pantalla HD de refresco de Imagen 60Hz',
                'precio' => 450000,
                'existencias' => 5,
                'imagen' => 'Monitor Acer 19.5 Pulgadas V206HQL Abi.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
     
            [
                'nombre' => 'monitor LENOVO',
                'codigo' => 1234,
                'descripcion' => 'el monitor LENOVO G27qc-30, que te ofrece un rendimiento potente en una forma elegante',
                'precio' => 1600000,
                'existencias' => 5,
                'imagen' => 'Monitor LENOVO 27 Pulgadas G27qc-30.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor HUAWEI',
                'codigo' => 1234,
                'descripcion' => 'monitor de 23.8 pulgadas diseñado para mejorar tu productividad y acompañarte en los momentos de diversión mientras disfrutas de su increíble pantalla FHD',
                'precio' => 800000,
                'existencias' => 5,
                'imagen' => 'Monitor HUAWEI 23.8 Pulgadas AD80 .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            /////
            [
                'nombre' => 'Monitor KALLEY',
                'codigo' => 12345,
                'descripcion' => 'monitor Kalley de 24” M24FP color gris',
                'precio' => 600000,
                'existencias' => 15,
                'imagen' => 'Monitor KALLEY 24 Pulgadas K-M24FP .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 2
               
            ],
            [
                'nombre' => 'Monitor Gamer ACER',
                'codigo' => 123456,
                'descripcion' => 'portatil Color Negro 16gb Cmsx16gx5m1a4800c40',
                'precio' => 800000,
                'existencias' => 15,
                'imagen' => 'Monitor Gamer ACER 23.8 Pulgadas QG241Y Pbmiipx .png',
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
