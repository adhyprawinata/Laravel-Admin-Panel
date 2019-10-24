<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!$request->session()->has('authenticated')) {
                return redirect()->action('LoginController@home');
            } else {
                return $next($request);
            }
        });
    }

    public function home()
    {
        return view('home/dashboard');
    }
}
