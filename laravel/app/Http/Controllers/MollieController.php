<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
    public function getIndex()
    {
        $donations = Donation::all();
        return view('donations.donate', compact('donations'));
    }

    public function preparePayment(Request $r)
    {
        /*
         * Aangezien u vermeldde in de MOLLIE tutorial dat het koppelen van MOLLIE aan Laravel
         * en het verschijnen van de transacties op het mollie dashboard het belangrijkste zijn,
         * heb ik het hele webhooks-gedoe overgeslagen.
         * En om die reden wordt de database-insert hier reeds uitgevoerd en wordt veronderstelt
         * dat elke betaling slaagt.
         * */

        $this->validate($r, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'sum' => 'required | numeric',
        ]);

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => bcdiv($r->sum, 1, 2), // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Donation by " . $r->first_name . ' ' . $r->last_name,
            "redirectUrl" => route('payment.success'),
            "webhookUrl" => "http://fa543ca08357.ngrok.io/webhooks/mollie",
        ]);

        $donation = new Donation;
        $donation->first_name = $r->first_name;
        $donation->last_name = $r->last_name;
        $donation->email = $r->email;
        $donation->message = $r->message;
        $donation->payment_id = $payment->id;
        $donation->sum = $r->sum;

        $donation->save();

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function handle(Request $request)
    {

        if (!$request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            $donation = Donation::where('payment_id', '=', $request->id)->first();
            $donation->completed = true;
            $donation->save();
        }
    }

    public function paymentSuccess()
    {
        //TODO Redirect maken
    }
}
