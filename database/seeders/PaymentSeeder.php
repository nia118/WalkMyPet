<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'customer_id' => 1,
                'booking_id' => 1,
                'payment_method' => 'Credit Card',
                'is_paid' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'booking_id' => 2,
                'payment_method' => 'OVO',
                'is_paid' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
