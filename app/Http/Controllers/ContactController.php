<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

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

    public function public()
    {
        return view('contact.public');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {        //send the admin an notification
        $admin->notify(new InboxMessage($message));
        // redirect the user back
        return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
    }

}
