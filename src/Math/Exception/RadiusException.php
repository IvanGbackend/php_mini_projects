<?php

namespace App\Math\Exception;

use Exception;

class RadiusException extends Exception
{
    public function __construct()
    {
        parent::__construct('Radius cannot be 0 or smaller than 0');
    }
}