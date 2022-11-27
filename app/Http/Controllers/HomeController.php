<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\basket;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $baskets = basket::where('user_id', Auth::id())->get();  #get basket items where field 'user-id' in basket table is == to Auth::id
       $total = basket::where('user_id', Auth::id())->sum('price');


        return view('home', compact('baskets', 'total')); # return /home + stored data




    }


   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $store = User::all(); #store users in $store
        $products = Products::all(); #store products in this variable
    return view('adminHome', ['members' => $store], compact('products')); #memebers is a key that can be used as a variables in html page using $members
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function basket(Request $request, $id) #Request is needed everytime we get data from a form
    {

    if(Auth::id()){ #if user is loged in

    $user=auth()->user();
    $product=Products::find($id); #get the id from the input of the user for the add to basket button

    $basket = new basket;

    $product_quantity =$request->quantity;
    $product_price = $product->Price;
    $totalOfProduct = $product_price*$product_quantity;

    $basket->user_id=$user->id;
    $basket->product_id=$product->id;
    $basket->name=$user->name;
    $basket->email=$user->email;
    $basket->product_name=$product->Title;
    $basket->price=$totalOfProduct;
    $basket->quantity=$request->quantity;
    $basket->save();
    
    return redirect('home');



     #stay on same page
    }

    else
    {
    return redirect('login'); #else: go to login and log in first
    }

    }


    /**
     Update quantity for user
     */
    
    function update(Request $request, $id){
    

    DB::table('baskets')
    ->where('id', $id)
    ->update(array('quantity' => $request->quantity));
    

    return redirect('home');
    

    }



    /**
     remove product from basket
     */

    function remove(Request $request, $id){
    

    DB::table('baskets')
    ->where('id', $id)
    ->delete();
    

    return redirect('home');
    

    }


    public function addToOrders(Request $request) #Request is needed everytime we get data from a form
    {

    if(Auth::id()){ #if user is loged in

    $user_id = Auth::id();
    $user = User::find($user_id);
    $baskets1 = basket::where('user_id', Auth::id())->get();
    $order = new Orders;

    foreach($baskets1 as $basket){
    $order = new Orders();

    $order->name=$request->name;
    $order->user_id= $user_id;
    $order->product_id= $basket->product_id;
    $order->email= $basket->email; 
    $order->product_name= $basket->product_name; 
    $order->quantity= $basket->quantity; 
    $order->price= $basket->price; 
    $order->house_number=$request->house_number;
    $order->street=$request->street_address;
    $order->postcode=$request->post_code;
    $order->city=$request->city;
    $order->name=$request->name;
    $order->name=$request->name;

    $order->save();

    }
    
    return redirect('home');



     #stay on same page
    }
    
    

    
}
}
