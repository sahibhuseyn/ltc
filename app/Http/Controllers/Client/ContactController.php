<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contacts(){
        $language = session('language');


        return view('client.contacts.contacts');
    }
}
