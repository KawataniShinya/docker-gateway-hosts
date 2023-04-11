<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $ip = $request->ip();
        $hostName = gethostbyaddr($ip);

        return view('welcome', compact('ip', 'hostName'));
    }
}
