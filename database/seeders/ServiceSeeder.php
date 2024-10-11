<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'type' => 'Grooming',
                'duration' => '01:00:00',
                'price' => 50000,
                'is_additional' => false, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Walking',
                'duration' => '01:00:00',  
                'price' => 50000,
                'is_additional' => false, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Training',
                'duration' => '01:00:00',  
                'price' => 100000,
                'is_additional' => false,  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Feeding',
                'duration' => '00:00:00', 
                'price' => 20000,
                'is_additional' => true,  
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
