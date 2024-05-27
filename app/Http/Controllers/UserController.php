<?php

namespace App\Http\Controllers;

use App\Interfaces\MessageSender;
use App\Services\EmailService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct(public MessageSender $emailService)
    // {
    // }

    public function index(){
        // new user register
        $emailService = app(MessageSender::class)->get('email');
        $smsService = app(MessageSender::class)->get('sms');
        // dd($smsService);

        $emailService->send('test@gmail.com','Email message');
        echo '<br/>';
        $smsService->send('01725930131','SMS message');
    }
}
