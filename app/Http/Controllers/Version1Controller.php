<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Version1Controller extends Controller
{
    public function home(){
    return view('home1');
    }

    public function products(){
    return view('products');
    }

    public function contact(){
    return view('contact');
    }

    public function basket(){
    return view('basket');
    }

    public function checkout(){
    return view('checkout');
    }
    
    public function about(){
        return view('about');
        }
        
}
