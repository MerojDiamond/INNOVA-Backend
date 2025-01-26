<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
            ['name' => 'edit articles'],
        ]);
    }
}
