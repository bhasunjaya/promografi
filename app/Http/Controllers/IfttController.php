<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class IfttController extends Controller
{
    public function twitter(Request $Request)
    {
        Log::info(print_r($request->all(), true));
    }
}
