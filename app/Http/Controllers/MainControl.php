<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

USE App\Models\Project;

class MainControl extends Controller
{
    function index()
    {
        return view('main');
    }
}
