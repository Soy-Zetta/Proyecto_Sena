<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;



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
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Stiven Rengifo',
            'email' => 'stiven@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Victo Hugo',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(50)->create();

        // \App\Models\User::factory(1)->create([
        //         'name' => 'Alfonso Gaviria',
        //         'email' => 'zetta@gmail.com',
        //         'password' => bcrypt('12345678')
        //     ]);
    }
}
