<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff_services')->insert([
            [
                'staff_id' => 1,      
                'service_id' => 1,   
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_id' => 2,  
                'service_id' => 2,   
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_id' => 3,      
                'service_id' => 3,   
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_id' => 4,  
                'service_id' => 2,   
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
