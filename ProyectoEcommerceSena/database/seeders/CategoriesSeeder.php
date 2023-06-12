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
            'name' => 'Alfonso Gaviria',
            'email' => 'zetta@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        categoria::create([
            'name' => 'Stiven Rengifo',
            'email' => 'stiven@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        categoria::create([
            'name' => 'Victo Hugo',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
