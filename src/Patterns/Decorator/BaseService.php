<?php

namespace App\Patterns\Decorator;

class BaseService implements DecorationInterface
{
    public function __construct()
    {
    }

    public function doSomething(): string
    {
        return __CLASS__.' is doing its generic thing from '.__METHOD__;
    }

    public function doAnotherThing(): string
    {
        return __CLASS__.' is doing its generic thing from '.__METHOD__;
    }
}
