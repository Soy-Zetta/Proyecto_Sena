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
        $role3=Role::create(['name'=> 'Cliente']);

        Permission::create(['name'=> 'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name'=> 'admin.proveedores.index', 'description' => 'Ver Listado de Proveedores'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=> 'admin.proveedores.create', 'description' => 'Crear un proveedor'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=> 'admin.proveedores.edit', 'description' => 'Editar Proveedor'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.proveedores.destroy', 'description' => 'Eliminar proveedor'])->syncRoles([$role1, $role2]);

       
    }
}
