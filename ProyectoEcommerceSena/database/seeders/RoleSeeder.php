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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Empleado']);
        $role3 = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver Listado de Usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.create', 'description' => 'Crear Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.destroy', 'description' => 'Eliminar Usuarios'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver Listado de Roles'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Eitar Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar Rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'products.index', 'description' => 'Ver Listado de Productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'products.create', 'description' => 'Crear Productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'products.edit', 'description' => 'Editar Productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'products.destroy', 'description' => 'Eliminar Productos'])->syncRoles([$role1]);

        Permission::create(['name' => 'proveedores.index', 'description' => 'Ver Listado de Proveedores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'proveedores.create', 'description' => 'Crear un proveedor'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'proveedores.edit', 'description' => 'Editar Proveedor'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'proveedores.destroy', 'description' => 'Eliminar proveedor'])->syncRoles([$role1]);

        Permission::create(['name' => 'categories.index', 'description' => 'Ver Listado de Categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'categories.create', 'description' => 'Crear Categoria'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'categories.edit', 'description' => 'Editar Categoria'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'categories.destroy', 'description' => 'Eliminar Categoria'])->syncRoles([$role1]);




    }
}
