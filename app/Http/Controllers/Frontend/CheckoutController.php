<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function getCheckout()
    {
        return view('frontend.checkout.checkout');
    }

    function postCheckout(CheckoutRequest $r)
    {

    }

    function getComplete()
    {
        return view('frontend.checkout.complete');
    }
}
