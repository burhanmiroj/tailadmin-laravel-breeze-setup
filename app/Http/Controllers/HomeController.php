<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * INDEX RESOURCE (HOMEPAGE USER)
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('index');
    }
}
