<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function contactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }


        $data = $request->all();
        Mail::to(env('MAIL_TO_ADDRESS', 'carloeusebi@gmail.com'))->send(new Contact($data));

        return redirect('/#contact')->with('success', __('messages.mail-sent'));
    }
}
