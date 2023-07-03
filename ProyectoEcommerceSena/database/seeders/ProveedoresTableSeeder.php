<?php

namespace Database\Seeders;

use App\Models\Admin\proveedore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       				
        $proveedores = [
            [
                'nombre' => 'Master',
                'tipo_documento' => 'NIT',
                'numero_documento' => 11234566,
                'direccion' => 'calle 4 norte',
                'telefono' => '3164567898',
                'correo' => 'master@gmail.com'
            ],
            [
                'nombre' => 'alfonso',
                'tipo_documento' => 'C.C',
                'numero_documento' => 1145998377,
                'direccion' => 'calle 36 b23',
                'telefono' => '3157689087',
                'correo' => 'alfonsopumarejo@gmail.com'
            ],
            [
                'nombre' => 'manuela',
                'tipo_documento' => 'RUT',
                'numero_documento' => 765548377,
                'direccion' => 'calle 5 b23',
                'telefono' => '3167889087',
                'correo' => 'manuela@gmail.com'
            ],
            // Agrega más productos aquí si es necesario
        ];
    
        foreach ($proveedores as $provedoresData) {
            proveedore::create($provedoresData);
        }
    }
}
