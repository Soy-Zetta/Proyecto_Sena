<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::create([
            'name' => 'Alfonso',
            'apellido' => 'Gaviria C',
            'tipo_documento' => 'Cedula',
            'num_documento' => '1.144.512.548',
            'lugar_nacimiento' => 'Cali',
            'fecha_nacimiento' => '1995-05-15',
            'telefono' => '3022356955',
            'ciudad_residencia' => 'Cali',
            'direccion' => 'Calle Perdida 1',
            'email' => 'zetta@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Stiven',
            'apellido' => ' Rengifo Ortiz',
            'tipo_documento' => 'Cedula',
            'num_documento' => '1.144.512.549',
            'lugar_nacimiento' => 'Cali',
            'fecha_nacimiento' => '2002-05-24',
            'telefono' => '3022356955',
            'ciudad_residencia' => 'Cali',
            'direccion' => 'Calle Perdida 2',
            'email' => 'stiven@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Empleado');

        User::create([
            'name' => 'Victor Hugo',
            'apellido' => 'Pacheco',
            'tipo_documento' => 'Tajeta de identidad',
            'num_documento' => '1.144.512.547',
            'lugar_nacimiento' => 'Cali',
            'fecha_nacimiento' => '2000-05-15',
            'telefono' => '3022356955',
            'ciudad_residencia' => 'Cali',
            'direccion' => 'Calle Perdida 3',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('12345678')

        ])->assignRole('Cliente');




        User::factory(50)->create([
            'tipo_documento' => 'Cedula',
        ])->each(function ($user) {
            $user->assignRole('Cliente');
        });

        

        // $tipo_documento = ['Cedula','Tajeta identida','Cedula extranjeria'];

        // foreach($tipo_documento as $documento){
        //     DB::table('users')-> insert([
        //         'tipo_documento' => $documento
        //     ]);
        // }

        // \App\Models\User::factory(1)->create([
        //         'name' => 'Alfonso Gaviria',
        //         'email' => 'zetta@gmail.com',
        //         'password' => bcrypt('12345678')
        //     ]);
        
    }
}
