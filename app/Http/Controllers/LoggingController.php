<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            // Log::error('Error guys! division by zero!');
            return view('error', ['error' => $e->getMessage()]);
        }
    }
}
