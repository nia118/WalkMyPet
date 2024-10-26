<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'John Doe',
                'address' => 'Jl. Mayjen Sungkono No. 123, Surabaya',
                'phone_number' => '0812-3456-7890',
                'email' => 'johndoe@gmail.com',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'address' => 'Jl. Diponegoro No. 456, Surabaya',
                'phone_number' => '0821-9876-5432',
                'email' => 'janesmith@gmail.com',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'address' => 'Jl. HR Muhammad No. 789, Surabaya',
                'phone_number' => '0856-1234-5678',
                'email' => 'alicejohnson@gmail.com',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Brown',
                'address' => 'Jl. Basuki Rahmat No. 321, Surabaya',
                'phone_number' => '0813-2222-3333',
                'email' => 'bobbrown@gmail.com',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chris Green',
                'address' => 'Jl. Raya Darmo No. 654, Surabaya',
                'phone_number' => '0857-4444-5555',
                'email' => 'chrisgreen@gmail.com',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
