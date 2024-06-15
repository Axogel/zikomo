<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;


class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'mesonero']);
        Role::create(['name' => 'caja']);
        Role::create(['name' => 'almacén']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Role::whereIn('name', ['admin', 'mesonero', 'caja', 'almacén'])->delete();
    }
};
