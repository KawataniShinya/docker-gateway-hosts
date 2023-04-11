<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeControllerSlow extends Controller
{
    public function index(Request $request)
    {
        $ip = '172.255.255.255';
        $hostName = gethostbyaddr($ip);

        return view('welcome', compact('ip', 'hostName'));
    }
}
