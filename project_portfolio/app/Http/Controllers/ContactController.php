<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Send email
        Mail::raw("Message from: {$request->name} ({$request->email})\n\n{$request->message}", function ($message) {
            $message->to('your-email@example.com')->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Your message has been sent!');
    }
}
