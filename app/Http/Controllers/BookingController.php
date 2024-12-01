<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pet; 
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Staff;
use App\Models\StaffSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Session;

class BookingController extends Controller
{
    public function showBookingForm(Service $service)
    {
        
        $pets = Pet::where('customer_id', auth()->user()->id)->get();
        
        // Mendapatkan tanggal unik dari schedules yang memiliki staf aktif yang menawarkan service yang dipilih
        $schedules = Schedule::whereHas('staffs', function ($query) use ($service) {
            $query->where('is_active', 1)
                  ->whereHas('services', function ($query) use ($service) {
                      $query->where('service_id', $service->id);
                  });
        })
        ->whereDate('date', '>=', Carbon::today())
        ->whereTime('start_time', '>=', Carbon::now()->format('H:i:s'))
        ->selectRaw('DISTINCT DATE(date) as date')
        ->orderBy('date')
        ->get();
    
        return view('book', [
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
                    ->withPivot('id as staff_schedule_id');
                }])
                ->get(['id', 'name', 'experience']); // Ambil field name dan experience dari Staff

            return response()->json($availableStaff);
        } catch (\Exception $e) {
            Log::error('Error fetching staff: ' . $e->getMessage());
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function insert(Request $request, Service $service)
    {
        try {
            $request->validate([
                'pet_id' => 'required|exists:pets,id',
                'location' => 'required|string|max:255',
                'staff_schedule_ids' => 'required|array',
                'staff_schedule_ids.*' => 'exists:staff_schedules,id',
            ]);

            // Retrieve the staff schedule IDs
            $staffScheduleIds = $request->input('staff_schedule_ids', []);
            $totalSchedules = count($staffScheduleIds);  // Count of selected schedules
            $totalPrice = $service->price * $totalSchedules;  // Calculate total price based on schedules

            // Check if the additional service is selected (only add once)
            $isAdditional = $request->has('additional') && $request->additional;

            if ($isAdditional) {
                // Add the price of the additional service (e.g., pet feeding) only once
                $additionalService = Service::find(4); // Assuming ID 4 is the pet feeding service
                if ($additionalService) {
                    $totalPrice += $additionalService->price;
                }
            }

            // Create the booking record
            $booking = Booking::create([
                'customer_id' => auth()->user()->id,
                'service_id' => $service->id,
                'pet_id' => $request->pet_id,
                'location' => $request->location,
                'amount' => $totalSchedules,
                'total_price' => $totalPrice,
                'is_accepted' => false,
                'is_additional' => $isAdditional,
            ]);

            // Link the selected staff schedules to the booking
            foreach ($staffScheduleIds as $scheduleId) {
                $staffSchedule = StaffSchedule::findOrFail($scheduleId);
                $staffSchedule->booking_id = $booking->id;
                $staffSchedule->save();
            }

            Session::flash('title', 'Booking Successful!');
            Session::flash('message', 'Your booking has been successfully saved.');
            Session::flash('icon', 'success');

            return redirect()->route('service');

        } 
        catch (\Exception $e) {
            // Handle error during booking creation
            Session::flash('title', 'Booking Failed!');
            Session::flash('message', 'An error occurred. Please try again.');
            Session::flash('icon', 'error');

            return redirect()->back();
        }
    }

    public function acceptBooking($bookingId)
    {
        try {
            $booking = Booking::findOrFail($bookingId);
            $booking->is_accepted = true;
            $booking->save();

            return response()->json([
                'message' => 'Booking accepted successfully!',
                'booking' => $booking
            ]);
        } catch (\Exception $e) {
            Log::error('Error accepting booking: ' . $e->getMessage());
            return response()->json(['error' => 'Error accepting booking'], 500);
        }
    }
}
