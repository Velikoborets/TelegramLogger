<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggingController extends Controller
{
    public function generateException()
    {
        return view('generateException');
    }
}
