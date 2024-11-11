<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'customer_id' => 1,
                'rating' => 5,
                'comment' => 'Great service! Highly recommended.',
                'type' => 'Grooming',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'rating' => 3,
                'comment' => 'Service was okay, could be improved.',
                'type' => 'Walking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 3,
                'rating' => 1,
                'comment' => 'Very disappointed with the service.',
                'type' => 'Training',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 4,
                'rating' => 4,
                'comment' => 'Good experience, but there is room for improvement.',
                'type' => 'Sitting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 5,
                'rating' => 2,
                'comment' => 'Not satisfied, service did not meet expectations.',
                'type' => 'Walking',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
