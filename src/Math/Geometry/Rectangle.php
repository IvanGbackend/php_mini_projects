<?php

namespace App\Math\Geometry;

class Rectangle implements Shape
{
    public function __construct(private int $width, private int $height) {
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}