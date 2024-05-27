<?php

namespace App\Services;

use App\Interfaces\MessageSender;

class EmailService implements MessageSender
{
    public function send($recipient, $message) {
        echo "Email is sent to : $recipient : $message";
        return true;
    }
}
