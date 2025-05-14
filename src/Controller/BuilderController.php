<?php

namespace App\Controller;

use App\Patterns\Builder\CandidHouse;
use App\Patterns\Builder\HouseBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/builder')]
class BuilderController extends AbstractController
{
    #[Route('/withBuildPattern', name: 'builder_withBuildPattern', methods: ['GET'])]
    public function buildWithPattern(): Response
    {
        $house = new HouseBuilder();
        $house->addFloor()
            ->setGarden(false)
            ->addRoom('Bathroom')
            ->addRoom('Kitchen');
        $house->getHouse();
        echo '<br>';

        $otherHouse = new HouseBuilder();
        $otherHouse->setGarage(true)
            ->addRoom('Bedroom');
        $house->getHouse();
        echo '<br>';

        return new Response("<a href='/'>Return to homepage</a>");
    }

    #[Route('/withoutBuildPattern', name: 'builder_withoutBuildPattern', methods: ['GET'])]
    public function buildWithoutPattern(): Response
    {
        $house = new CandidHouse(['Bathroom, Kitchen'], 1, false, true);
        $house->getHouse();
        echo '<br>';

        $house = new CandidHouse(['Bedroom'], 0, true);
        $house->getHouse();
        echo '<br>';

        return new Response("<a href='/'>Return to homepage</a>");
    }
}
