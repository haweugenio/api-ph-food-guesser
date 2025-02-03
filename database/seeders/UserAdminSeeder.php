<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    public function run(): void
    {
		// Create or update the admin user
        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'], // Check if user already exists
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin')
            ]
        );
		
        // Assign the super-admin role to the admin user
        $admin->assignRole('super-admin');
    }
}
