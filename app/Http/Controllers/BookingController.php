<?php

namespace App\Http\Controllers;

use App\Models\Pet; 
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function showBookingForm(Service $service)
    {
        $id_customer = 2; 
        
        $pets = Pet::where('customer_id', $id_customer)->get();
        
        // Mendapatkan tanggal unik dari schedules yang memiliki staf aktif yang menawarkan service yang dipilih
        $schedules = Schedule::whereHas('staffs', function ($query) use ($service) {
            $query->where('is_active', 1)
                  ->whereHas('services', function ($query) use ($service) {
                      $query->where('service_id', $service->id);
                  });
        })
        ->selectRaw('DISTINCT DATE(date) as date') // Ambil hanya tanggal unik
        ->orderBy('date') // Urutkan tanggal
        ->get();
    
        return view('book', [
            'customer_id' => $id_customer,
            'pets' => $pets,
            'service' => $service,
            'schedules' => $schedules
        ]);
    }    

    public function availableStaff(Request $request)
    {
        try {
            // Mencari staf yang tersedia pada tanggal dan layanan tertentu
            $availableStaff = Staff::whereHas('schedules', function($query) use ($request) {
                    $query->whereDate('date', $request->schedule_date)
                        ->whereNull('booking_id'); // Staf dengan booking_id null masih tersedia
                })
                ->whereHas('services', function($query) use ($request) {
                    $query->where('service_id', $request->service_id); // Hanya staff yang memiliki service ini
                })
                ->with(['schedules' => function($query) use ($request) {
                    $query->whereDate('date', $request->schedule_date)
                        ->select('staff_id', 'start_time', 'end_time', 'date');
                }])
                ->get(['id', 'name', 'experience']); // Ambil field name dan experience dari Staff

            return response()->json($availableStaff);
        } catch (\Exception $e) {
            Log::error('Error fetching staff: ' . $e->getMessage());
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
