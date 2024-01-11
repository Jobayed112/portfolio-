<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Make sure to import the ContactMessage model

class ContactController extends Controller
{
    public function showForm()
    {
        return view('Contact');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new ContactMessage instance and fill it with the validated data
        $contactMessage = new ContactMessage($validatedData);

        // Save the message to the database
        $contactMessage->save();

        // You can add any additional logic or redirect as needed
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}