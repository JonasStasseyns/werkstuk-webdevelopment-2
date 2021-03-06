<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class ContactController extends Controller
{
    //

    public function getIndex()
    {
        return view('pages.contact');
    }

    public function subscribe(Request $request)
    {
        if (!Newsletter::isSubscribed($request->user_email)) {
            Newsletter::subscribe($request->user_email);
        }
        return view('pages.contact', ['message' => 'You have been subscribed successfully.']);
    }

    public function sendMail(Request $r)
    {

        $form = [
            'first_name' => $r->first_name,
            'last_name' => $r->last_name,
            'subject' => $r->subject,
            'message_text' => $r->message
        ];

        Mail::send('mails.contact', $form, function ($message) use ($r) {
            $message->sender('jonastas@student.arteveldehs.be');
            $message->to('jonastas@student.arteveldehs.be', 'Jonas Stasseyns');
            $message->to($r->email, $r->first_name . $r->last_name);
            $message->subject($r->subject);
        });

        return view('pages.contact', ['message' => 'Your message was sent successfully.']);
    }
}
