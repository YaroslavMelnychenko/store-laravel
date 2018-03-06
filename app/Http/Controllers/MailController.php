<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\NewUserWelcome;

class MailController extends Controller
{
    public function mail() {
        Mail::to(Auth::guard('web')->user()->email)->send(new NewUserWelcome());
        return redirect('/');
    }
}
