<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    function show() {
        $data= Slider::all();
        return view('/sections.slider' , ['sliders'=>$data]);
    }
}
