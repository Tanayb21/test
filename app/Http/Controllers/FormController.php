<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'purpose' => 'required|string|in:recruitment,consultation,partnership,demo,other',
            'details' => 'nullable|string|max:1000'
        ]);

        FormSubmission::create($validated);
        return redirect()->back()->with('success', 'Thank you for your submission. We will get back to you soon!');
    }
}