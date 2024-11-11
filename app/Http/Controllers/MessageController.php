<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

public function showMessage()
{
    // $message = Message::all();
    $message = Message::with('customer')->get();
    return view('main', ['messages' => $message]);
}

}
