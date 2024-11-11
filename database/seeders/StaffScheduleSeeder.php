<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StaffScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff_schedules')->insert([
            [
                'staff_id' => 1,      
                'schedule_id' => 1,    
                'booking_id' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_id' => 2,      
                'schedule_id' => 2,    
                'booking_id' => null,    
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_id' => 2,      
                'schedule_id' => 3,    
                'booking_id' => null,    
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_id' => 4,      
                'schedule_id' => 3,    
                'booking_id' => null,    
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
