<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
    public function getIndex()
    {
        return view('donations.donate');
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

        $donation = new Donation;
        $donation->first_name = $r->first_name;
        $donation->last_name = $r->last_name;
        $donation->email = $r->email;
        $donation->sum = $r->sum;

        $donation->save();

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => strval(number_format($r->sum, 2)), // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Donation by " . $r->first_name . ' ' . $r->last_name,
            "redirectUrl" => route('payment.success'),
            "webhookUrl" => "http://skip/want/u/zegt/dat/het/niet/nodig/is",
            "metadata" => [
                "donation_id" => $donation->id,
            ],
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function paymentSuccess()
    {
        //TODO Redirect maken
    }
}
