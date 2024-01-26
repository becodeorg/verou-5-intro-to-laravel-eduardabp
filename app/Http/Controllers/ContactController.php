<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index ()
    {
        return view('contact');
    }

    public function submitForm (Request $request)
    {

        $incomingFields = $request->validate([
            'subject' => 'required',
            'email' => ['required', 'email'],
            'message' => ['required', 'min:15']
        ]);

        $subject = $request->input('subject');
        $email = $request->input('email');
        $message = $request->input('message');

        News::create([
            'subject'=> $subject,
            'email'=> $email,
            'message'=> $message,
        ]);

        return view ('confirmation');
    }
}
