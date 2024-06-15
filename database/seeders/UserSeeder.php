<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Verificar si el usuario ya existe
        $existingUser = User::where('email', 'admin@admin.com')->first();

        if (!$existingUser) {
            // Crear el usuario si no existe
            User::create([
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'password' => Hash::make('contraseña'),
            ])->assignRole('admin');
        } else {
            // Actualizar el usuario existente si es necesario
            $existingUser->name = 'Administrador';
            $existingUser->password = Hash::make('contraseña');
            $existingUser->save();
        }
    }
}
