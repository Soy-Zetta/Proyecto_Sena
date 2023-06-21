<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
             'name' => 'Memoria Ram Corsair Vengeance Ddr5',
             'slug' => 'Vengeance',
             'details' => 'Memoria Ram Corsair Vengeance Ddr5 Sodimm Gamer Color Negro 16gb Cmsx16gx5m1a4800c40',
             'price' => 300000,
             'shipping_cost' => 15000,
             'description' => 'RAM',
             'category_id' => 1,
             'brand_id' => 1,
             'image_path' => 'ram.png'
         ]);
 
         Product::create([
             'name' => 'Teclado Gamer',
             'slug' => 'Teclado gamer Redragon Harp',
             'details' => 'Teclado gamer Redragon Harpe Pro K503A RGB QWERTY español color negro con luz RGB',
             'price' => 144000,
             'shipping_cost' => 15000,
             'description' => 'Teclado gamer redragon',
             'category_id' => 1,
             'brand_id' => 2,
             'image_path' => 'tec.png'
         ]);
 
         Product::create([
             'name' => 'Parlante para computador',
             'slug' => 'HV-SK202',
             'details' => 'Parlante Havit HV-SK202',
             'price' => 107200,
             'shipping_cost' => 15000,
             'description' => 'Parlante Havit HV-SK202 negra',
             'category_id' => 2,
             'brand_id' => 1,
             'image_path' => 'boci.png'
         ]);
 
         Product::create([
             'name' => 'Camara web',
             'slug' => 'camara web traslu',
             'details' => 'Web',
             'price' => 500000,
             'shipping_cost' => 15000,
             'description' => 'Web',
             'category_id' => 3,
             'brand_id' => 3,
             'image_path' => 'cam.png'
         ]);
 
         Product::create([
             'name' => 'Tarjeta de video grafica',
             'slug' => 'Geforce',
             'details' => 'Tarjeta de video Nvidia MSI Gaming X GeForce 10 Series GTX 1050 Ti GEFORCE GTX 1050 TI GAMING X 4G 4GB',
             'price' => 400000,
             'shipping_cost' => 12000,
             'description' => 'GDDR5 de 7108MHz',
             'category_id' => 4,
             'brand_id' => 4,
             'image_path' => 'grafi.png'
         ]);
 
         Product::create([
             'name' => 'Procesador corei7',
             'slug' => 'Intel',
             'details' => '12 núcleos y 4.9GHz de frecuencia',
             'price' => 1844000,
             'shipping_cost' => 15000,
             'description' => 'Producto de alto rendimiento y línea exclusiva para profesionales que ejecutan muchos programas a la vez',
             'category_id' => 5,
             'brand_id' => 4,
             'image_path' => 'intel.png'
         ]);
 
         Product::create([
             'name' => 'Monitor gamer',
             'slug' => 'lg',
             'details' => '40 pulg',
             'price' => 1200000,
             'shipping_cost' => 15000,
             'description' => 'Monitor',
             'category_id' => 2,
             'brand_id' => 5,
             'image_path' => 'moni.png'
         ]);
         Product::create([
             'name' => 'Mouse gamer Zelotes T80',
             'slug' => 'absolution',
             'details' => 'Mouse gamer Zelotes T80 negro',
             'price' => 160000,
             'shipping_cost' => 15000,
             'description' => 'Mouse',
             'category_id' => 2,
             'brand_id' => 5,
             'image_path' => 'mou.png'
         ]);
 
     }
}
