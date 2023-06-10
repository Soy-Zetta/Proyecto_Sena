<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    public function run()
    {
        $role1=Role::create(['name'=> 'Admin']);
        $role2=Role::create(['name'=> 'Empleado']);

        Permission::create(['name'=> 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=> 'products.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.users.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.users.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.users.destroy'])->syncRoles([$role1, $role2]);

 
    }
}