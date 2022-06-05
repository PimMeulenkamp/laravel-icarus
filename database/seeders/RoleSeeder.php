<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
           'id' => Role::$ROLE_USER,
           'name' => 'user',
           'description' => 'default role'
        ]);
        Role::create([
            'id' => Role::$ROLE_ADMIN,
            'name' => 'admin',
        ]);
        Role::create([
            'id' => Role::$ROLE_SUPER_ADMIN,
            'name' => 'superAdmin',
        ]);
    }
}
