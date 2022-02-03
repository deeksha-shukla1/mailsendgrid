<?php

namespace App\Http\Controllers;

use App\Mail\SendgridMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        Mail::to('dikshashukla895@gmail.com')->send(new SendgridMail());
        dd('mail sent');
    }
}
