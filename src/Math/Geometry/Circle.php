<?php

namespace App\Math\Geometry;

use App\Math\Exception\RadiusException;

class Circle implements Shape
{
    public function __construct(private int $radius) {
        if ($this->radius <= 0) {
            throw new RadiusException();
        }
    }

    public function getExtent(): int
    {
        return 2 * $this->radius * \App\Math\Constants::PI;
    }

    public function getArea(): int
    {
        return $this->radius * $this->radius * \App\Math\Constants::PI;
    }
}