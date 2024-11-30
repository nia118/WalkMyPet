<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'address' => 'Jl. Mayjen Sungkono No. 123, Surabaya',
            'phone_number' => '0812-3456-7890',
            'is_active' => true,
        ]);

        User::create([
            'id' => 2,
            'name' => 'Bob Smith',
            'email' => 'bob.smith@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'address' => 'Jl. Diponegoro No. 456, Surabaya',
            'phone_number' => '0821-9876-5432',
            'is_active' => true,
        ]);

        User::create([
            'id' => 3,
            'name' => 'Charlie Brown',
            'email' => 'charlie.brown@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'address' => 'Jl. HR Muhammad No. 789, Surabaya',
            'phone_number' => '0856-1234-5678',
            'is_active' => true,
        ]);

        User::create([
            'id' => 4,
            'name' => 'David Williams',
            'email' => 'david.williams@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'address' => 'Jl. Basuki Rahmat No. 321, Surabaya',
            'phone_number' => '0813-2222-3333',
            'is_active' => true,
        ]);

        User::create([
            'id' => 5,
            'name' => 'Eva Davis',
            'email' => 'eva.davis@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'address' => 'Jl. Raya Darmo No. 654, Surabaya',
            'phone_number' => '0857-4444-5555',
            'is_active' => false,
        ]);
    }
}
