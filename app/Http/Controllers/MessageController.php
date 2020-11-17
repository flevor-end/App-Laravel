<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){

       $message = request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'
       ]);

       //Eviar el Email
       Mail::to('fabianpb923@gmail.com')->queue(new MessageReceived($message));

       
       return 'Mensaje Enviado';
    }
}
