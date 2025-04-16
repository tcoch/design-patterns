<?php

namespace App\Patterns\Singleton;

class NotSingletonClass
{
    private string $attribute;

    public function __construct()
    {
        echo 'The '.__CLASS__.' constructor may be called more than once.<br>';
    }

    public function getAttribute(): string
    {
        return $this->attribute;
    }

    public function setAttribute(string $attribute): static
    {
        $this->attribute = $attribute;

        return $this;
    }
}
