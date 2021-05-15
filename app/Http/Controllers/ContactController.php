<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactUs()
    {
    return view('contact_us');
    }
    public function storeContact(Request $request)
    {
        //
    }
}
