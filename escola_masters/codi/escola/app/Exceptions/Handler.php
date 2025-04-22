<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    public function render($request, Exception $exception)
    {
        if ($exception instanceof ExcepcionPersonalizada) {
            return response()->json([
                'error' => $exception->getMessage()
            ], 400); 
        }

        return parent::render($request, $exception);
    }
}
