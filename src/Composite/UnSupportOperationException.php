<?php

namespace Kenny\DesignPattern\Composite;

use Exception;
use Throwable;

class UnSupportOperationException extends Exception
{
    public function __construct($message = "", $code = 0,  ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
