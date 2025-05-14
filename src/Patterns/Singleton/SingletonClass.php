<?php

namespace App\Patterns\Singleton;

class SingletonClass
{
    private static ?SingletonClass $singletonClass = null;

    private string $attribute;

    private function __construct()
    {
        echo 'The '.__CLASS__.' constructor will be called only once.<br>';
    }

    public static function getInstance(): SingletonClass
    {
        if (null == self::$singletonClass) {
            echo 'Singleton was not instantiated before<br>';
            self::$singletonClass = new SingletonClass();
        }

        echo 'The singleton only instance exists / has been created.<br>';

        return self::$singletonClass;
    }

    public function __toString(): string
    {
        return __CLASS__;
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
