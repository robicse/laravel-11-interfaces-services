<?php

namespace App\Services;

use App\Interfaces\MessageSender;

class SMSService implements MessageSender
{
    public function send($recipient, $message) {
        echo "SMS is sent to : $recipient : $message";
        return true;
    }
}
