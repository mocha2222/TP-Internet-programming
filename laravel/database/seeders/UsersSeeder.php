<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->delete();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
        ]);

        $staff1 = User::create([
            'name' => 'Staff One',
            'email' => 'staff1@example.com',
            'password' => Hash::make('password'),
        ]);

        $staff2 = User::create([
            'name' => 'Staff Two',
            'email' => 'staff2@example.com',
            'password' => Hash::make('password'),
        ]);

        // Attach roles
        $admin->roles()->attach(Role::where('name', 'admin')->first());
        $manager->roles()->attach(Role::where('name', 'manager')->first());
        $staff1->roles()->attach(Role::where('name', 'staff')->first());
        $staff2->roles()->attach(Role::where('name', 'staff')->first());
    }
}
