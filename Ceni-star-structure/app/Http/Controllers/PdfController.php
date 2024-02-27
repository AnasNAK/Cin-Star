<?php

namespace App\Http\Controllers;
use App\Mail\MailExample;
use Mail;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function index()
    {
        // $user = Auth::user();

        $subject = 'Ticket';
        $body = 'CINEMA TICKET';

        Mail::to('takrouroumaima@gmail.com')->send(new MailExample($subject, $body));
    }
}
