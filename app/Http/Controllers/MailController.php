<?php

namespace App\Http\Controllers;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title'=>'hi',
        'body'=>'hi'];
        Mail::to('konarch2022@gmal.com')->send(new MyTestMail($details));
        return "email sent";
    }
}
?>