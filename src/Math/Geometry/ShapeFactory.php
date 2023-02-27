<?php

namespace App\Math\Geometry;

class ShapeFactory
{
    public function createShape(array $shapeData): Shape
    {
        if (isset($shapeData['width']) && isset($shapeData['height'])) {
            return new Rectangle($shapeData['width'], $shapeData['height']);
        }

        if (isset($shapeData['radius'])) {
            return new Circle($shapeData['radius']);
        }

        throw new \Exception('Unknown shape requested');
    }
}