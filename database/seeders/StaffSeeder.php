<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff')->insert([
            [
                'name' => 'Agus Santoso',
                'address' => 'Jl. Raya Darmo No. 655, Surabaya',
                'phone_number' => '0812-3456-7890',
                'email' => 'agus.santoso@example.com',
                'experience' => '10 years of experience in training dogs for obedience and agility competitions.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dewi Lestari',
                'address' => 'Jl. Diponegoro No. 25, Surabaya',
                'phone_number' => '0813-9876-5432',
                'email' => 'dewi.lestari@example.com',
                'experience' => '8 years of experience in professional grooming for cats and dogs.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rudi Hartono',
                'address' => 'Jl. Basuki Rahmat No. 55, Surabaya',
                'phone_number' => '0814-1234-5678',
                'email' => 'rudi.hartono@example.com',
                'experience' => '12 years of experience in pet sitting and ensuring the well-being of animals during owners’ absence.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aminah',
                'address' => 'Jl. Tunjungan No. 102, Surabaya',
                'phone_number' => '0815-5555-6666',
                'email' => 'siti.aminah@example.com',
                'experience' => '5 years of experience in walking and caring for dogs of various breeds.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Budi Setiawan',
                'address' => 'Jl. Dharmawangsa No. 100, Surabaya',
                'phone_number' => '0816-7777-8888',
                'email' => 'budi.setiawan@example.com',
                'experience' => '15 years of experience in managing a pet care facility specializing in holistic animal care.',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
