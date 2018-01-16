<?php

namespace App\Http\Controllers\Client;

use App\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function priceList(){
        $language = session('language');

        return view('client.price.price');
    }
}
