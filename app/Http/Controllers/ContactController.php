<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form data (e.g., send an email, save to database)
        // Example: Send an email
        // Mail::to('info@example.com')->send(new ContactFormSubmitted($request->all()));

        // Redirect with a success message
        return redirect()->back()->with('message', 'Your message has been sent!');
    }
}
