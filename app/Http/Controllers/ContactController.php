<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to('admin@ehb.be')->send(new ContactMail($request->only('name', 'email', 'message')));

        return redirect()->route('contact.create')->with('success', 'Your message has been sent!');
    }
}
