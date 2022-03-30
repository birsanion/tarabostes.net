<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'company_name' => 'required',
            'message' => 'required',
        ]);

        $message = "First name: " . $validatedData['first_name'] . "\n" .
            "Last name: " . $validatedData['last_name'] . "\n" .
            "Company name: " . $validatedData['company_name'] . "\n" .
            "Email: " . $validatedData['email'] . "\n" .
            "Phone number: " . $validatedData['phone'] . "\n" .
            "Message: " . $validatedData['message'] . "\n";

        Mail::raw($message, function ($message) use ($validatedData) {
            $message->to('birsan.ion@gmail.com');
            $message->subject('Tarabostes Contact');
            $message->from($validatedData['email']);
        });

        return response()->json([
            'status' => 'ok',
        ]);
    }
}
