<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
            'company' => 'required|string'
        ]);

        Mail::to('admin@admin.com')->send(new ContactFormMail($request->email, $request->phone, $request->company));

        return redirect()->route('index')->with('success', 'Успешно не контактиравте, нашите колеги ќе ве контактираат наскоро.');
    }
}
