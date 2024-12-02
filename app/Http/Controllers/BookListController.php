<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookListController extends Controller
{
    public function showBookList()
    {
        $userId = auth()->id();

        $bookings = Booking::where('customer_id', $userId)
        ->with([
            'pet',
            'staffSchedules.staff',
            'staffSchedules.schedule'
        ])
        ->get();

        return view('booklist', compact('bookings'));
    }
}
