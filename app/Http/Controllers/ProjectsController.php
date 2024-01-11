<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function projects()
    {
        return view("Projects");
    }
}
