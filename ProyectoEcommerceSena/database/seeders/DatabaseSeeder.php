<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);


        \App\Models\User::factory(25)->create();

        \App\Models\User::factory()->create([
            'name' => 'Alfonso Gaviria',
            'email' => 'zetta@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
