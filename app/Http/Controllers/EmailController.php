<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $contactData = $request->validate([
            'name' => 'required|min:3|max:55',
            'email' => 'required|email',
            'subject' => 'required|max:80',
            'message' => 'required|max:3000'
        ]);

        try {
            Mail::to('thomassimbamwene@gmail.com')->send(new ContactFormMail($contactData));

            return redirect()->route('home')->with('success', "Email Sent Successfully");
        } catch (Exception $e) {
            return redirect()->route("home")->with("error", "Failed to Send Email. Try Again Later!");
        }


    }
}
