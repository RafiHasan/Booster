<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Shipu\Aamarpay\Aamarpay;


class paymentcontroler extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function pay()
    {
        $payment = new Aamarpay(config('aamarpay'));

        return $payment->paymentUrl();
    }
}