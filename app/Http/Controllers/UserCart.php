<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCart extends Controller
{
    function UserCart(Request $req){
        $data= $req->input();
        $req->session()->put('cart',$data['cart']);
        echo session('cart');
    }
}

