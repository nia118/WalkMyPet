<?php

namespace App\Http\Controllers;

use App\Models\Pet; 
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Staff;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    // Display booking form
    public function showBookingForm(Service $service)
    {
        // Assume a customer ID (e.g., logged-in customer)
        $id_customer = 2; // This should ideally come from authentication
    
        // Fetch all pets belonging to this customer
        $pets = Pet::where('customer_id', $id_customer)->get();
    
        // Fetch schedules that have active staff available for the selected service
        $schedules = Schedule::whereHas('staffs', function ($query) use ($service) {
            $query->where('is_active', 1) // Filter for active staff
                  ->whereHas('services', function ($query) use ($service) {
                      $query->where('service_id', $service->id);
                  });
        })->get();
    
        // Pass data to the booking view
        return view('book', [
            'customer_id' => $id_customer,
            'pets' => $pets,
            'service' => $service,
            'schedules' => $schedules // Pass the filtered schedules to the view
        ]);
    }    

    public function availableStaff(Request $request)
    {
        Log::info('Schedule ID: ' . $request->schedule_id);
        Log::info('Service ID: ' . $request->service_id);

        try {
            // Mencari staf yang masih tersedia (booking_id null) pada schedule dan service tertentu
            $availableStaff = Staff::whereHas('schedules', function($query) use ($request) {
                $query->where('schedule_id', $request->schedule_id)
                    ->whereNull('booking_id'); // Staf dengan booking_id null masih tersedia
            })->get();

            return response()->json($availableStaff);
        } catch (\Exception $e) {
            Log::error('Error fetching staff: ' . $e->getMessage());
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
