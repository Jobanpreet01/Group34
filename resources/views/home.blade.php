<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Account Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/Style.css"> <!-- links the styles sheet to this page -->

   <link rel = "stylesheet" type= "text/css" href="css/Style.css" />

   <script src= "js/script.js"></script> <!-- links the javascript to the page -->

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


   
<!-- header section starts  -->

<header class="main-header">

   <a href="{{url('/')}}" class="logo"><img src="images/Fav.png" alt="Logo2" width="50" height="50"></a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the headers to be clicked and take the user to the different pages -->
      <a  style="text-decoration:none" href="{{url('/')}}">Home</a>
      <a  style="text-decoration:none" href="{{url('/products')}}" class="link">Products</a>
      <a  style="text-decoration:none" href="{{url('/contact')}}">Contact Us</a>
      <a  style="text-decoration:none" href="{{url('/about')}}">About Us</a>
      <a class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> <!-- Route 'logout' is associated to URL "public/" -->
          @csrf
      </form>
     </div>
    </a>
   </nav>

</header>

<section class="products">
<section class="heading-link">
   <h3>{{ @Auth::user()->name }}'s Account</h3>
</section>
</section>

<!-- header section ends -->
<style>
.container {
    width: 0 auto; height:200px; border: 0px solid black; margin: 0 auto;
}
.row {
    width:0 auto; height:0 auto; border: 2px solid black; margin:0 auto; font: 10px  Arial, sans-serif; text-align: center; background-color: #21A54B; 
}
.product,.quantity,.price{
    margin: 0 auto; background-color: rgb(211,211,211);
}
.col{
    width: 0 auto; height:0 auto;
}
table, th, {
  border: 2px solid black;
}
td {
  text-align: center;
}
.btn {
    background-color: #219BA5;
    margin-top: 0.3rem;
    border-radius: 5px;
    border: 2px solid black;
    color: black;
    padding: 5px 15px;
}
.checkoutSec{
    background-color: rgb(211,211,211); margin:1px;

}
.Myorderhistory{
    background-color: rgb(211,211,211); margin:2px;

}


</style>
<section class="products">
<div class="container">
<br>
<div class="row"><h1>My Basket</h1></div>
<table>
<br>
<tr>
<td style="font-size: 20px;" ><div class"col"><div class="product"><h2>&nbsp Product &nbsp</h2></div></div></td>
<td style="font-size: 20px;" ><div class"col"><div class="quantity"><h2>&nbsp Quantity &nbsp</h2></div></div></td>
<td style="font-size: 20px;" ><div class"col"><div class="price"><h2>&nbsp Price &nbsp</h2></div></div></td>
</tr>
@foreach($baskets as $basket)
<tr>
<td>&nbsp{{$basket['product_name']}}</td>


<!--basket view-->
<form action="{{url('update',$basket->id)}}" method="POST">
      @csrf

<td><input type= "number" value= "{{$basket['quantity']}}" min="1" class="form" name="quantity"></td>
<td>£{{$basket['price']}}</td>



<!--update button-->
<td><button type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update</button></td>
      </form>

      <!--Remove Button-->

      <form action="{{url('remove',$basket->id)}}" method="POST">
      @csrf

<td><button type="submit" onclick="alert('Product Removed Successfully')" class="btn">remove</button></td>
      </form>


<!--end form-->

</tr>
@endforeach
</table>

<table>
<tr>
<td><h3>Total = &nbsp</td><td>£{{$total}}</td>
</tr>


</table>
</div>
<br>

<!--Delivery Address take input-->
<div class="container">
<br>
<div class="row"><h1> Checkout </h1></div>

<table>
<tr>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Name</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>House Number</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Street Address</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Post Code</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>City</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Card Number</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Expiry Date</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Cvv Number</h3></div></div></td>

</tr>



<form action="{{url('checkout')}}" method="POST">
      @csrf
<tr>
<td><input type= "text" value= "" class="form" name="name"></td>
<td><input type= "text" value= "" class="form" name="house_number"></td>
<td><input type= "text" value= "" class="form" name="street_address"></td>
<td><input type= "text" value= "" class="form" name="post_code"></td>
<td><input type= "text" value= "" class="form" name="city"></td>
<td><input type= "text" value= "" class="form" name="card_number"></td>
<td><input type= "date" value= "" class="form" name="expiry_date"></td>
<td><input type= "password" value= "" class="form" name="cvv"></td>
<br>

<!--Submit Order-->
<td><button type="submit" onclick="alert('We received your order! Thank You For Shopping with Us :) !!')" class="btn">Checkout</button></td>
</form>


</tr>

</table>
</div>
<br>
<!--Show user's orders-->

<div class="container">
<br>
<div class="row"><h1>My Order History</h1></div>
<table>
<tr>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Product &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Quantity &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Price &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Order Status &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Ordered Places On Date: &nbsp</h3></div></div></td>
</tr>
@foreach($myorders as $order)
<tr>
<td>{{$order['product_name']}}</td>
<td>{{$order['quantity']}}</td>
<td>{{$order['price']}}</td>
<td>{{$order['orderStatus']}}</td>
<td>{{$order['created_at']}}</td>
</tr>
@endforeach
</table>
</div>

</div>


<section class="footer">

   <div class="box-container">

      <div class="box">
      <h3>Vitality Electronics</h3>
         <p>Welcome to our e-commerce website where we sell a large range of tech products. This company has been going for 15 years and we are proud to have over 100 million users and we are located all over the world with many connections in all parts of the world, which has allowed for us to expand globally and a fast rate. We look forward to you shopping with us and if you have any queries please feel free to find our contact details under the contacts section.</p>
         <div class="share">

         
</div>
      </div>

      
      <div class="box">
         <h3>Quick Links</h3>

         <a  style="text-decoration:none" href="{{url('/')}}" class = "link">Home</a>
      <a  style="text-decoration:none" href="{{url('/products')}}" class="link">Products</a>
      <a  style="text-decoration:none" href="{{url('/contact')}}" class = "link">Contact Us</a>
      <a  style="text-decoration:none" href="{{url('/about')}}" class = "link">About Us</a>
      <a style="text-decoration:none" href="{{url('/references')}}" class = "link">References</a>

</div>
      </div>
      
</section>

</body>
</html>









