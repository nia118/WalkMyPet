<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            [
                'customer_id' => 1,
                'service_id' => 1,
                'location' => 'Jl. Mayjen Sungkono No. 123, Surabaya',
                'amount' => 1,
                'total_price' => 50000,
                'is_accepted' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'service_id' => 2,
                'location' => 'Jl. Diponegoro No. 456, Surabaya',
                'amount' => 2,
                'total_price' => 100000,
                'is_accepted' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);        
    }
}
