<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyaccountController extends Controller
{
    public function index()
    {
      return view('myaccount');
    }
}
