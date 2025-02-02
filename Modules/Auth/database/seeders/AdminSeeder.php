<?php

namespace Modules\Auth\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where("name", "SuperAdmin")->first();
        $admin = User::create([
            "name" => "Super-Admin",
            "email" => "admin@gmail.com",
            "password" => "123456",
        ]);
        $admin->assignRole($role);
    }
}
