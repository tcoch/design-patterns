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
    #[Route('/', name: 'singleton_createInstance', methods: ['GET'])]
    public function doAnotherThing(): Response
    {
        echo '--- Execution stack trace - BEGIN<br><br>';
        // This creates two instances of a non-singleton class
        $notSingletonInstanceA = (new NotSingletonClass())->setAttribute('notSingletonInstanceA');
        $notSingletonInstanceB = (new NotSingletonClass())->setAttribute('notSingletonInstanceB');

        echo '<br>';

        // This gets
        $singletonInstanceA = SingletonClass::getInstance()->setAttribute('singletonInstanceA');
        $singletonInstanceB = SingletonClass::getInstance()->setAttribute('singletonInstanceB');
        echo '<br>--- Execution stack trace - END<br><hr><br>';

        return $this->render('patterns/singleton.html.twig', [
            'notSingletonInstanceA' => $notSingletonInstanceA,
            'notSingletonInstanceB' => $notSingletonInstanceB,
            'singletonInstanceA' => $singletonInstanceA,
            'singletonInstanceB' => $singletonInstanceB,
        ]);
    }
}
