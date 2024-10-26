<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // Function to get available times for a specific staff on a specific schedule
    protected function getAvailableTimes($staffId, $scheduleId)
    {
        // Get the specific schedule
        $schedule = Schedule::find($scheduleId);

        if (!$schedule) {
            return []; // Return empty if schedule is not found
        }

        // Check if the staff is linked to the specific schedule and is available
        $availableSchedules = $schedule->staffs()
            ->where('staff.id', $staffId) // Pastikan kita memeriksa ID staf
            ->whereNull('staffSchedule.booking_id') // Periksa ketersediaan
            ->select('schedule.start_time', 'schedule.end_time') // Pilih kolom waktu dari schedule
            ->join('staffSchedule', 'staffSchedule.schedule_id', '=', 'schedules.id')
            ->get();

        // Map the schedules to a readable format
        return $availableSchedules->map(function ($staffSchedule) {
            return [
                'start_time' => $staffSchedule->start_time, // Ambil start_time dari Schedule
                'end_time' => $staffSchedule->end_time,     // Ambil end_time dari Schedule
            ];
        })->toArray(); // Convert to array
    }
}
