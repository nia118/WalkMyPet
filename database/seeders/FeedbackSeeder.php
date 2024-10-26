<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Loop untuk membuat entri feedback
        for ($i = 1; $i <= 2; $i++) { // Menghasilkan 10 entri feedback
            DB::table('feedback')->insert([
                'customer_id' => rand(1, 2), // Menghasilkan customer_id acak antara 1-5
                'staff_id' => rand(1, 2),    // Menghasilkan staff_id acak antara 1-5
                'rating' => rand(1, 5),       // Menghasilkan rating acak antara 1-5
                'comment' => $this->generateRandomComment(), // Menggunakan fungsi untuk menghasilkan komentar acak
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }        
    }

     // Fungsi untuk menghasilkan komentar acak
     private function generateRandomComment()
     {
         $comments = [
             'Excellent service!',
             'Very satisfied with the experience.',
             'Could be better.',
             'Not what I expected.',
             'Will definitely come back!',
             'Staff was very helpful.',
             'Had some issues, but overall fine.',
             'I loved it!',
             'Would recommend to others.',
             'Average experience.',
         ];
 
         return $comments[array_rand($comments)]; // Mengambil komentar acak dari array
     }
}
