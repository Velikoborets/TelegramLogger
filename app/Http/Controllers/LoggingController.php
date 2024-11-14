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
            $a = 2 / 0;
        } catch(\Throwable $e) {
            Log::error('Error guys! division by zero!');
            return view('error', ['error' => $e->getMessage()]);
        }
    }

    public function testUnHandleException()
    {
        throw new \Exception('This is unhandled exception!');
    }
}
