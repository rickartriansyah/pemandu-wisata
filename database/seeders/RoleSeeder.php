<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Buat peran super_admin untuk guard web
        Role::create(['name' => 'super_admin', 'guard_name' => 'web']);
    }
}

