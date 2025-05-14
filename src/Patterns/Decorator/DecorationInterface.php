<?php

namespace App\Patterns\Decorator;

interface DecorationInterface
{
    public function doSomething(): void;

    public function doAnotherThing(): void;
}
