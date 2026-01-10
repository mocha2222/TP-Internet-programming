<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Clear old data (important for repeatable labs)
        Role::query()->delete();
        Permission::query()->delete();

        // Create roles
        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);
        $staff = Role::create(['name' => 'staff']);

        // Create permissions
        $permissions = [
            'users.manage',
            'products.create',
            'products.update',
            'products.delete',
            'categories.create',
            'categories.update',
            'categories.delete',
        ];

        foreach ($permissions as $perm) {
            Permission::create(['name' => $perm]);
        }

        // Assign permissions
        $admin->permissions()->sync(Permission::all()->pluck('id'));

        $manager->permissions()->sync(
            Permission::whereIn('name', [
                'products.create',
                'products.update',
                'categories.create',
                'categories.update',
            ])->pluck('id')
        );

        // staff has NO permissions (view only)
    }
}
