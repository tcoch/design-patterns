<?php

namespace App\Controller;

use App\Patterns\Singleton\NotSingletonClass;
use App\Patterns\Singleton\SingletonClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/singleton')]
class SingletonController extends AbstractController
{
    #[Route('/notSingleton/differentDefinition', name: 'singleton_notUsed_differentDefinitionOfInstance', methods: ['GET'])]
    public function notSingleton(): Response
    {
        $notSingletonInstanceA = (new NotSingletonClass())->setAttribute('notSingletonInstanceA');
        $notSingletonInstanceB = (new NotSingletonClass())->setAttribute('notSingletonInstanceB');

        $notSingletonInstanceA->getAttribute();
        $notSingletonInstanceB->getAttribute();

        var_dump($notSingletonInstanceA);
        echo '<br>';
        var_dump($notSingletonInstanceB);
        echo '<br>';

        echo '$notSingletonInstanceA === $notSingletonInstanceB: '.($notSingletonInstanceA === $notSingletonInstanceB ? 'true' : 'false').'<br>';
        echo '$notSingletonInstanceA == $notSingletonInstanceB: '.($notSingletonInstanceA == $notSingletonInstanceB ? 'true' : 'false').'<br>';

        return new Response("<br><a href='/'>Return to homepage</a>");
    }

    #[Route('/notSingleton/sameDefinition', name: 'singleton_notUsed_sameDefinitionOfInstance', methods: ['GET'])]
    public function notSingletonSameDefinition(): Response
    {
        $notSingletonInstanceC1 = (new NotSingletonClass())->setAttribute('SameValue');
        $notSingletonInstanceC2 = (new NotSingletonClass())->setAttribute('SameValue');

        var_dump($notSingletonInstanceC1);
        echo '<br>';
        var_dump($notSingletonInstanceC2);
        echo '<br>';

        echo '$notSingletonInstanceC1 === $notSingletonInstanceC2: '.($notSingletonInstanceC1 === $notSingletonInstanceC2 ? 'true' : 'false').'<br>';
        echo '$notSingletonInstanceC1 == $notSingletonInstanceC2: '.($notSingletonInstanceC1 == $notSingletonInstanceC2 ? 'true' : 'false').'<br>';

        return new Response("<br><a href='/'>Return to homepage</a>");
    }

    #[Route('/singletonInstance', name: 'singleton_used', methods: ['GET'])]
    public function singletonInstance(): Response
    {
        $singletonInstanceA = SingletonClass::getInstance()->setAttribute('singletonInstanceA');
        $singletonInstanceB = SingletonClass::getInstance()->setAttribute('singletonInstanceB');

        $singletonInstanceA->getAttribute();
        $singletonInstanceB->getAttribute();

        var_dump($singletonInstanceA);
        echo '<br>';
        var_dump($singletonInstanceB);
        echo '<br>';

        echo '$singletonInstanceA === $singletonInstanceB: '.($singletonInstanceA === $singletonInstanceB ? 'true' : 'false');

        return new Response("<br><br><a href='/'>Return to homepage</a>");
    }
}
