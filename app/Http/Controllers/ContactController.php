<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Customer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'service' => 'required|string',
            'message' => 'required|string',
            'rating' => 'required|integer|between:1,5', // Rating should be between 1 and 5
            'type' => 'required|string', // Assuming you're sending the type field as part of the form
        ]);

        // Assuming the user is logged in, and their ID is available via auth()->user()
        $customer = auth()->user(); // Get the logged-in user

        // Create a new message in the database
        Message::create([
            'customer_id' => $customer->id, // Save the customer ID
            'rating' => $request->input('rating'),
            'comment' => $request->input('message'),
            'type' => $request->input('service'),
        ]);

        // Redirect or return a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
