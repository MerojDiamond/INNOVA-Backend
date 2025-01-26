<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Seeder;

class AuthDatabaseSeeder extends Seeder
{
    public function run(): void
    {
//        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
