<?php

namespace App\Controller;

use App\Patterns\Decorator\BaseService;
use App\Patterns\Decorator\DecoratedService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/decorator')]
class DecoratorController extends AbstractController
{
    public function __construct(private BaseService $baseService, private DecoratedService $decoratedService)
    {
    }

    #[Route('/doSomething', name: 'decorator_doSomething', methods: ['GET'])]
    public function doSomething(): Response
    {
        $this->baseService->doSomething();
        $this->decoratedService->doSomething();

        return new Response("<a href='/'>Return to homepage</a>");
    }

    #[Route('/doAnotherThing', name: 'decorator_doAnotherThing', methods: ['GET'])]
    public function doAnotherThing(): Response
    {
        $this->baseService->doAnotherThing();
        $this->decoratedService->doAnotherThing();

        return new Response("<a href='/'>Return to homepage</a>");
    }
}
