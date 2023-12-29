<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\User;

class ContactController extends Controller
{
    //

 public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new contact();
        $contact->user_id = auth()->user()->id;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect('/contact')->with('status', 'Message sent!');
    }

    public function showMessage()
    {
        $contacts = contact::all();
        return view('userMessage', ['contacts' => $contacts]);
    }
}
