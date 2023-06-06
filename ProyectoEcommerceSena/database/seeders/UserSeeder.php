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
            'name' =>'Alfonso Gaviria',
            'email' =>'zetta@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
