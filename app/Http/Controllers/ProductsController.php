<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $min = 1;
        $storeData = Products::where('Quantity', '>=', $min)->get();
        #$storeData = Products::all(); #store data from table
        return view('products', compact('storeData')); # bring data into the products page
        
        

        

    }
}
