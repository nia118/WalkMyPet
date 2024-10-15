<?php

namespace App\Http\Controllers;
use App\Models\Pet; 
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookingForm($id_customer = 2)
    {
        // Retrieve the pets that belong to this customer
        $pets = Pet::where('customer_id', $id_customer)->get();

        // Pass the pets and customer_id to the view
        return view('book', ['customer_id' => $id_customer, 'pets' => $pets]);
    }
}
