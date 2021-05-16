<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs()
    {
    return view('contact_us');
    }
    public function storeContact(Request $request)
    {
        $contact = $request->all();

        Mail::To('cliente@gmail.com')->send(new ContactReceived($contact));

        return redirect()->back()->with('message','Grazie per averci contattato ,verrai ricontattato il prima possibile');
    }
}
