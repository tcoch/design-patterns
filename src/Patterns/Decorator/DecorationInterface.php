<?php

namespace App\Patterns\Decorator;

interface DecorationInterface
{
    public function doSomething(): string;

    public function doAnotherThing(): string;
}
