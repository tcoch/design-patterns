<?php

namespace App\Patterns\Builder;

trait GetHouseTrait
{
    /**
     * Prints the definition of a house.
     */
    public function getHouse(): void
    {
        echo '<br>House definition :';
        echo '<ul>';
        echo '<li>Rooms : '.implode(',', $this->rooms).'</li>';
        echo '<li>Number of floors : '.$this->nbFloors.'</li>';
        echo '<li>Has a garage : '.($this->hasGarage ? 'true' : 'false').'</li>';
        echo '<li>Has a garden : '.($this->hasGarden ? 'true' : 'false').'</li>';
        echo '</ul>';
    }
}
