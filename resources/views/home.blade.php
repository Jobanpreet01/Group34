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
   <link rel="stylesheet" href="css/style.css"> <!-- links the styles sheet to this page -->

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

   <a href="#" class="logo"> <i class="fas fa-id-card"></i></a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the headers to be clicked and take the user to the different pages -->
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}">Contact Us</a>
      <a href="{{url('/basket')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
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



<!-- header section ends -->
<h1>Your Basket</h1>
<table>
<tr>
<td>Product</td>
<td>Quantity</td>
<td>Price</td>
</tr>
@foreach($baskets as $basket)
<tr>
<td>{{$basket['product_name']}}</td>


<!--basket view-->
<form action="{{url('update',$basket->id)}}" method="POST">
      @csrf

<td><input type= "number" value= "{{$basket['quantity']}}" min="1" class="form" name="quantity"></td>
<td>£{{$basket['price']}}</td>



<!--update button-->
<td><button type="submit" onclick="myAlert()" class="btn">Update</button></td>
      </form>

      <!--Remove Button-->

      <form action="{{url('remove',$basket->id)}}" method="POST">
      @csrf

<td><button type="submit" onclick="myAlert()" class="btn">remove</button></td>
      </form>


<!--end form-->

</tr>
@endforeach
</table>

<table>
<tr>
<td>Total</td>
</tr>

<td>{{$total}}</td>
</table>

<br>
<!--Delivery Address take input-->

<table>
<tr>
<td>Name</td>
<td>House Number</td>
<td>Street Address</td>
<td>Post Code</td>
<td>City</td>
<td>Card Number</td>
<td>Expiry Date</td>
<td>Cvv Number</td>

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
<td><button type="submit" onclick="alert('Order Has Been Submitted')" class="btn">Checkout</button></td>
</form>


</tr>

</table>


<!--Show user's orders-->

<h1>My Order History</h1>
<table>
<tr>
<td>Product</td>
<td>Quantity</td>
<td>Price</td>
<td>Ordered Places On Date:</td>
</tr>
@foreach($myorders as $order)
<tr>
<td>{{$order['product_name']}}</td>
<td>{{$order['quantity']}}</td>
<td>{{$order['price']}}</td>
<td>{{$order['created_at']}}</td>
</tr>
@endforeach
</table>

      
      
     

      



  

</div>


</body>
</html>









