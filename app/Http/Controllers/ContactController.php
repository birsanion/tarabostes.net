<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $to = 'birsan.ion@gmail.com';
        $subject = 'Tarabostes Contact';
        $headers = 'From: ' . $validatedData['email'] . "\r\n";
        $message = 'First name: ' . $validatedData['first_name'] . '\n' .
            'Last name: ' . $validatedData['last_name'] . '\n' .
            'Company name: ' . $validatedData['company_name'] . '\n' .
            'Email: ' . $validatedData['email'] . '\n' .
            'Phone number: ' . $validatedData['phone'] . '\n' .
            'Message: ' . $validatedData['message'] . '\n';

        return response()->json([
            'sent' => mail($to, $subject, $message, $headers),
        ]);
    }
}
