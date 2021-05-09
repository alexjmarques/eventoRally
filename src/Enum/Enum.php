<?php


namespace App\Enum;


abstract class Enum
{
    public function getConstList()
    {
        $reflector = new \ReflectionClass($this);

        return $reflector->getConstants();
    }
}