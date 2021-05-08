<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    function show() {
        return view('/sections.slider');
    }
}
