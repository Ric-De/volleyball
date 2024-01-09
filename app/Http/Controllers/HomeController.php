<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ /*The __invoke method is used to manage only one route*/
        return view("home");
}
}