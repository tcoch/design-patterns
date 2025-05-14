<?php

namespace App\Patterns\Decorator;

class BaseService implements DecorationInterface
{
    public function __construct()
    {
    }

    public function doSomething(): void
    {
        echo __CLASS__.' is doing its generic thing from '.__METHOD__.'<br>';
    }

    public function doAnotherThing(): void
    {
        echo __CLASS__.' is doing its generic thing from '.__METHOD__.'<br>';
    }
}
