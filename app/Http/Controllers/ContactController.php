<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function referral()
    {
        return view('contact.referral');
    }

    public function enquire()
    {
        return view('contact.enquire');
    }

}
