<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'company_name' => 'required',
            'message' => 'required',
        ]);

        Mail::send('mail.contactMail', [
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'company_name' => $input['company_name'],
            'content' => $input['message'],
        ], function ($message) use ($request) {
            $message->from($request->email);
            $message->to('mihai@tarabostes.net')->subject('Tarabostes Contact Form');
        });

        return response()->json([
            'status' => 'ok',
        ]);
    }
}
