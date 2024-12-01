<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'service' => 'required|string',
            'message' => 'required|string',
            'rating' => 'required|integer|between:1,5', // Rating should be between 1 and 5
        ]);
    
        // Remove the authentication check temporarily for testing
        // $customer = auth()->user(); // Get the logged-in user
        // if (!$customer) {
        //     return redirect()->route('login'); // Redirect if the user is not logged in
        // }
    
        // For testing purposes, create a dummy user or pass a default customer ID
        $customer = (object) ['id' => 1];  // You can adjust this if you need a real logged-in user
        
        // Create a new message in the database
        Message::create([
            'customer_id' => $customer->id,
            'rating' => $validated['rating'],
            'comment' => $validated['message'],
            'type' => $validated['service'],
        ]);
    
        // Redirect with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }    
}
