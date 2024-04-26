<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Admin']);
        $permission = Permission::create(['name' => 'manage ratings']);
        $permission = Permission::create(['name' => 'manage location']);
        $permission = Permission::create(['name' => 'manage path']);
        $permission = Permission::create(['name' => 'manage edges']);

        $permission->assignRole($adminRole);

        $adminUser = User::factory()->create([
            'email' => 'admin@admin.com',
        ]);
        $adminUser->assignRole('Admin');
    }
}
