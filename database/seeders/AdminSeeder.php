<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com', // Change to your desired admin email
            'password' => Hash::make('password'), // Change to your desired admin password
            'is_admin' => 1, // Admin role
        ]);   }
}
