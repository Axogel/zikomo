<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Obtener roles existentes o crear nuevos si no existen
        $adminRole = Role::where('name', 'admin')->firstOrCreate(['name' => 'admin']);
        $mesoneroRole = Role::where('name', 'mesonero')->firstOrCreate(['name' => 'mesonero']);
        $cajaRole = Role::where('name', 'caja')->firstOrCreate(['name' => 'caja']);
        $almacenRole = Role::where('name', 'almacén')->firstOrCreate(['name' => 'almacén']);

        // Crear permisos si no existen
        Permission::firstOrCreate(['name' => 'user.index']);
        Permission::firstOrCreate(['name' => 'user.create']);
        Permission::firstOrCreate(['name' => 'products.index']);
        Permission::firstOrCreate(['name' => 'products.create']);
        Permission::firstOrCreate(['name' => 'suppliers.index']);
        Permission::firstOrCreate(['name' => 'suppliers.create']);
        // Agrega más permisos según necesites

        // Asignar permisos a los roles existentes
        $adminRole->syncPermissions(['user.index', 'user.edit', 'user.create', 'products.index', 'products.create', 'suppliers.index', 'suppliers.create']);
        $mesoneroRole->syncPermissions(['user.index', 'products.index', 'profile.edit']);
        $cajaRole->syncPermissions(['user.index', 'profile.edit']);
        $almacenRole->syncPermissions(['user.index', 'products.index', 'products.create', 'suppliers.index', 'suppliers.create', 'profile.edit']);
    }
}
