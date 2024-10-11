<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menentukan tanggal yang ingin digunakan
        $date = Carbon::today(); // Anda dapat mengganti dengan tanggal tertentu

        // Membuat jadwal dari jam 09:00 sampai 17:00 dengan interval 1 jam
        for ($hour = 9; $hour <= 17; $hour++) {
            DB::table('schedules')->insert([
                'date' => $date,
                'start_time' => Carbon::createFromTime($hour, 0, 0)->toTimeString(),
                'end_time' => Carbon::createFromTime($hour + 1, 0, 0)->toTimeString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }          
    }
}
