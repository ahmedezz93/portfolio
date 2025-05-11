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
        $setting=Setting::first();
        return view('site.contact_us.index',compact('setting'));
    }
    public function sendMail(Request $request)
    {

        // Validate the request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'required|string|max:20',

        ]);

        // Prepare email details
        $details = [
            'first_name' => $request->input('first_name'),
            'second_name' => $request->input('second_name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'phone' => $request->input('phone'),

        ];

        // Send email
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($details));
        ContactUs::create($details);
        MessageHelper::getSuccessMessage('sent successfully');
        return back();
    }
}
