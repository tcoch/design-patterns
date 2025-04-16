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
        $base = $this->baseService->doSomething();
        $decorated = $this->decoratedService->doSomething();

        return $this->render('patterns/decorator.html.twig', [
            'base' => $base,
            'decorated' => $decorated,
        ]);
    }

    #[Route('/doAnotherThing', name: 'decorator_doAnotherThing', methods: ['GET'])]
    public function doAnotherThing(): Response
    {
        $base = $this->baseService->doAnotherThing();
        $decorated = $this->decoratedService->doAnotherThing();

        return $this->render('patterns/decorator.html.twig', [
            'base' => $base,
            'decorated' => $decorated,
        ]);
    }
}
