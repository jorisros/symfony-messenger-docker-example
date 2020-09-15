<?php

namespace App\Message;

final class LongTaskMessage
{
    private $context;

    public function __construct(array $context = [])
    {
        $this->context = $context;
    }

    public function getContext(): array
    {
        return $this->context;
    }
}
