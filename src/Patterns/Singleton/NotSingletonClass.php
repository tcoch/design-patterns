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
        echo "Attribute value is: {$this->attribute}<br>";

        return $this->attribute;
    }

    public function setAttribute(string $attribute): static
    {
        $this->attribute = $attribute;

        echo "Attribute value is set to: {$this->attribute}<br>";

        return $this;
    }
}
