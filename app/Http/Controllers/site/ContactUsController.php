<?php

namespace App\Http\Controllers\site;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{


    public function index()
    {
        $setting = Setting::first();
        return view('site.contact_us.index', compact('setting'));
    }
    public function sendMail(Request $request)
    {

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',

        ]);

        // Prepare email details
        $details = [
            'name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),

        ];

        // Send email
        ContactUs::create($details);
        MessageHelper::getSuccessMessage('sent successfully');
        return back();
    }
}
