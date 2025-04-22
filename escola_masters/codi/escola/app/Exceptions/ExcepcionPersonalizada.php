<?php

namespace App\Exceptions;

use Exception;

class ExcepcionPersonalizada extends Exception
{
    public function __construct($message = "Error, algo ha fallado :D ", $code = 0)
    {
        parent::__construct($message, $code);
    }
}