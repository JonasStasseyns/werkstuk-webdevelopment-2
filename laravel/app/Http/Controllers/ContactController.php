<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function getIndex()
    {
        return view('pages.contact');
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
            $message->to('brundeco@student.arteveldehs.be', 'Jonas Stasseyns');
//            $message->cc($r->email, $r->name);
            $message->subject($r->subject);
        });

    }
}
