<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Assuming you have a Contact model
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Get the current date and time
        $currentDateTime = Carbon::now();

        // Create a new Contact model instance
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        $contact->created_at = $currentDateTime;

        // Save the contact form submission to the database
        $contact->save();

        // Return a response if needed
        return response()->json(['message' => 'Submission successful'], 200);
    }
}
