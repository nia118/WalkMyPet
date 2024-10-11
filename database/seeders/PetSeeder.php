<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert([
            [
                'customer_id' => 1,
                'name' => 'Ducky',
                'age' => 3,
                'species' => 'Dog',
                'breed' => 'Golden Retriever',
                'weight' => 25.5,
                'allergy' => 'None',
                'description' => 'A playful and friendly dog who loves to run.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'name' => 'Whiskers',
                'age' => 2,
                'species' => 'Cat',
                'breed' => 'Siamese',
                'weight' => 4.3,
                'allergy' => 'Dust',
                'description' => 'Curious and calm, loves to sit by the window and observe.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 3,
                'name' => 'Charlie',
                'age' => 5,
                'species' => 'Dog',
                'breed' => 'Poodle',
                'weight' => 8.1,
                'allergy' => 'Chicken',
                'description' => 'Very intelligent and loves to learn new tricks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 4,
                'name' => 'Max',
                'age' => 1,
                'species' => 'Dog',
                'breed' => 'Beagle',
                'weight' => 12.7,
                'allergy' => 'Grain',
                'description' => 'Energetic and loves to explore new places.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 5,
                'name' => 'Milo',
                'age' => 4,
                'species' => 'Cat',
                'breed' => 'Bengal',
                'weight' => 5.2,
                'allergy' => 'None',
                'description' => 'Loves to climb and very active, always exploring around the house.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'name' => 'Shadow',
                'age' => 6,
                'species' => 'Dog',
                'breed' => 'Labrador Retriever',
                'weight' => 30.7,
                'allergy' => 'None',
                'description' => 'A calm and loyal dog that loves long walks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
