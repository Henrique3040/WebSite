<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class AdminAnswerController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required',
            'email' => 'required|email',
        ]);

        $answer = $request->input('answer');
        $email = $request->input('email');

        Mail::send('emails_answer', ['answer' => $answer], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Antwoord op uw vraag');
        });

        Contact::where('email', $email)->delete();

        return back()->with('status', 'Email sent successfully!');
    }
}
