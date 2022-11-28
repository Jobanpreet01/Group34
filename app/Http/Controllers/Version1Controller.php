<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Queries;

class Version1Controller extends Controller
{
    public function home(){
    return view('home1');
    }

    public function products(){
    return view('products');
    }

    public function contact(Request $request){ #fetch data from contact form and save into database table queries

    $query = new Queries();

    $query->email=$request->email1;
    $query->name=$request->name1;
    $query->query=$request->query1;
    $query->save();

    return view('contact');
    }

    public function basket(){
    return view('basket');
    }

    public function checkout(){
    
    return view('checkout');
    }

    
    
}
