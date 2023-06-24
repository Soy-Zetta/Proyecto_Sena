<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::create([
            'name' => 'Alfonso Gaviria',
            'email' => 'zetta@gmail.com',
            'tipo_documento' => 'Cedula',
            'num_documento' => '1.144.512.548',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Stiven Rengifo',
            'email' => 'stiven@gmail.com',
            'tipo_documento' => 'Cedula',
            'num_documento' => '1.144.512.549',
            'password' => bcrypt('12345678')
        ])->assignRole('Empleado');

        User::create([
            'name' => 'Victo Hugo',
            'email' => 'victor@gmail.com',
            'tipo_documento' => 'Tajeta de identidad',
            'num_documento' => '1.144.512.547',
            'password' => bcrypt('12345678')

        ])->assignRole('Cliente');




        User::factory(50)->create([
            'tipo_documento' => 'Cedula',
        ]);

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
