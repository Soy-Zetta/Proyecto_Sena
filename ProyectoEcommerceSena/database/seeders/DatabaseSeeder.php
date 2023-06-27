<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    public function run ()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        //productos
        $this->call(ProveedoresTableSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductosTableSeeder::class);
       
      
        

    }
}
