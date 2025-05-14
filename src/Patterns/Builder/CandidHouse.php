<?php

namespace App\Patterns\Builder;

/**
 * This class enables you to build a house, using the builder pattern.
 */
class CandidHouse
{
    use GetHouseTrait;

    /**
     * @var string[]
     */
    private array $rooms;

    private int $nbFloors = 0;

    private bool $hasGarage = false;

    private bool $hasGarden = false;

    /**
     * @param string[] $rooms
     */
    public function __construct(array $rooms, int $numberOfFloor, bool $hasGarage = false, bool $hasGarden = false)
    {
        echo 'Calling constructor for '.__CLASS__.'<br>';

        echo 'Adding room ['.implode(',', $rooms).']<br>';
        $this->rooms = $rooms;

        echo "Adding $numberOfFloor floor(s)<br>";
        $this->nbFloors = $numberOfFloor;

        echo 'Setting garage presence / absence<br>';
        $this->hasGarage = $hasGarage;

        echo 'Setting garden presence / absence<br>';
        $this->hasGarden = $hasGarden;
    }
}
