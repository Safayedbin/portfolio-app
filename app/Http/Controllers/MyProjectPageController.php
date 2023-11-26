<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProjectPageController extends Controller
{
    function PageShow(){
        return view('MyProjects');
    }
}
