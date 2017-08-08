<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use Session;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }
    public function store(Request $request)
    {
      $contact = new Contact();
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->mobile = $request->mobile;
      $contact->message = $request->message;
      $contact->save();
      Session::flash('success', 'Message was sent');
      return \Redirect::back();

    }
}
