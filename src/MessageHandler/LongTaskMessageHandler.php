<?php

namespace App\MessageHandler;

use App\Message\LongTaskMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class LongTaskMessageHandler implements MessageHandlerInterface
{
    public function __invoke(LongTaskMessage $message)
    {
        var_dump($message);
        // do something with your message
        echo 'Go in sleep';
        sleep(10);
    }
}
