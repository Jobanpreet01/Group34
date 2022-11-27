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

<h1>List of Users</h1>
<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
</tr>
@foreach($members as $user)
<tr>
<td>{{$user['id']}}</td>
<td>{{$user['name']}}</td>
<td>{{$user['email']}}</td>
</tr>
@endforeach
</table>


<h1>List of Products in stock</h1>
<table>
<tr>
<td>ID</td>
<td>Title</td>
<td>Description</td>
<td>Quantity</td>
<td>Price</td>
</tr>
@foreach($products as $product)
<tr>
<td>{{$product['id']}}</td>
<td>{{$product->Title}}</td>
<td>{{$product->Description}}</td>
<td>{{$product->Quantity}}</td>
<td>£{{$product->Price}}</td>
</tr>
@endforeach
</table>



<h1>All orders from users</h1>
<table>
<tr>
<td>Order ID</td>
<td>User ID</td>
<td>Product ID</td>
<td>Product Name</td>
<td>Quantity</td>
<td>Price</td>
<td>Placed On Date:</td>
<td>Email Address</td>
<td>Name For Delivery</td>
<td>House Number</td>
<td>Street Address</td>
<td>Post Code</td>

</tr>
@foreach($orders as $order)
<tr>
<td>{{$order['id']}}</td>
<td>{{$order['user_id']}}</td>
<td>{{$order['product_id']}}</td>
<td>{{$order['product_name']}}</td>
<td>{{$order['quantity']}}</td>
<td>{{$order['price']}}</td>
<td>{{$order['created_at']}}</td>
<td>{{$order['email']}}</td>
<td>{{$order['name']}}</td>
<td>{{$order['house_number']}}</td>
<td>{{$order['street']}}</td>
<td>{{$order['postcode']}}</td>

</tr>
@endforeach
</table>





</body>
</html>








