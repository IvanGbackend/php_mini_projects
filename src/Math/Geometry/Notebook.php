<?php

namespace App\Math\Geometry;

// primjer Singleton klase
class Notebook
{
    private static ?Notebook $instance = null;

    private array $shapes = [];
    
    private function __construct() {
    }

    public static function getInstance(): Notebook
    {
        if (self::$instance === null){
            self::$instance = new Notebook();
        }

        return self::$instance;
    }

    public function addShape(Shape $shape)
    {
        $this->shapes[] = $shape;

        return $this;
    }
}