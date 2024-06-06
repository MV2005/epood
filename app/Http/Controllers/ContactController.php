<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Process the form data (e.g., send email)
        $data = $request->only('name', 'email', 'message');

        // Example of sending email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('your-email@example.com')
                    ->subject('New Contact Form Submission')
                    ->setBody('<p><strong>Name:</strong> ' . $data['name'] . '</p><p><strong>Email:</strong> ' . $data['email'] . '</p><p><strong>Message:</strong> ' . $data['message'] . '</p>', 'text/html');
        });

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}
