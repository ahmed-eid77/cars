<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
        $setting = Setting::first();
        return view('site.contact.index', compact('setting'));
    }

    public function sendEmail(ContactRequest $request){
        Contact::create($request->validated());
        return back()->with('success', 'Message sent successfully.');
    }
}
