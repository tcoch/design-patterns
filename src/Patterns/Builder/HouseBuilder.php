<?php

namespace App\Patterns\Builder;

/**
 * This class enables you to build a house, using the builder pattern.
 */
class HouseBuilder
{
    use GetHouseTrait;

    /**
     * @var string[]
     */
    private array $rooms;

    private int $nbFloors = 0;

    private bool $hasGarage = false;

    private bool $hasGarden = false;

    public function __construct()
    {
        echo 'Calling constructor for '.__CLASS__.'<br>';
    }

    public function addRoom(string $roomName): self
    {
        echo 'Calling method '.__METHOD__.' in builder class '.__CLASS__.'<br>';

        $this->rooms[] = $roomName;

        return $this;
    }

    public function addFloor(int $numberOfFloor = 1): self
    {
        echo 'Calling method '.__METHOD__.' in builder class '.__CLASS__.'<br>';

        $this->nbFloors += $numberOfFloor;

        return $this;
    }

    public function setGarage(bool $garage): self
    {
        echo 'Calling method '.__METHOD__.' in builder class '.__CLASS__.'<br>';

        $this->hasGarage = $garage;

        return $this;
    }

    public function setGarden(bool $garden): self
    {
        echo 'Calling method '.__METHOD__.' in builder class '.__CLASS__.'<br>';

        $this->hasGarden = $garden;

        return $this;
    }
}
