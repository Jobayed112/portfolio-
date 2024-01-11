<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    function aboutme()
    {
        return view("AboutMe");
    }
}
