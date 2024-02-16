<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Virat Gandhi");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('dev3@scube.net.in', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('dev4@scube.net.in','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
}
