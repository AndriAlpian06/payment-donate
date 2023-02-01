<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index(){
        return view('donate');
    }

    public function payment(Request $request){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-NFn4GEwCDBw24fqoyXlFm6pi';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->get('amount'),
            ),
            'customer_details' => array(
                'first_name' => $request->get('fname'),
                'last_name' => $request->get('lname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        //return $snapToken;
        //dd($params);

        return view('payment', [
            'snap_token' => $snapToken,
            'amount' => $request->amount
        ]);
    }
}
