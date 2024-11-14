<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggingController extends Controller
{
    public function generateException()
    {
        return view('generateException');
    }

    public function testException()
    {
        try {
            $a = 'str';
            $b = 2;
            $c = $a + $b;
        } catch(\Throwable $e) {
            Log::critical('critical error!!!');
            return view('error', ['error' => $e->getMessage()]);
        }
    }

    public function testUnHandleException()
    {
        throw new \Exception('This is unhandled exception!(critical error)');
    }
}
