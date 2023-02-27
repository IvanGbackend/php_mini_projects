<?php

namespace App\Person;

class Circle
{
    public function __construct(private array $people) {
    }

    public function getPeople(): string
    {
        return implode(', ', $this->people);
    }
}