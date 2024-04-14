<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        Newsletter::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'تم الاشتراك بنجاح.');
    }
}
