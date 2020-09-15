<?php

namespace App\Controller;

use App\Message\LongTaskMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    private $bus;

    public function __construct(MessageBusInterface $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @Route("/", name="frontend")
     */
    public function index()
    {
        $this->bus->dispatch(new LongTaskMessage([
            'cool',
            'joris'
        ]));

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FrontendController.php',
        ]);
    }
}
