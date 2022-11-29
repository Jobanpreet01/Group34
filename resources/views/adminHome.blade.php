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

   <a href="{{url('/')}}" class="logo"><img src="images/Fav.png" alt="Logo2" width="50" height="50"></a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the headers to be clicked and take the user to the different pages -->
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}">Contact Us</a>
      <a href="{{url('/about')}}">About Us</a>
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

<form action="{{url('updatequantity',$product->id)}}" method="POST">
      @csrf
<td><input type= "number" value= "{{$product->Quantity}}" min="0" class="form" name="quantity"></td>
<!--update button-->
<td><button type="submit" onclick="myAlert()" class="btn">Update Quantity</button></td>
      </form>

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
<td>Order Status</td>
<td>Change Order Status</td>

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
<td>{{$order['orderStatus']}}</td>

<form action="{{url('updateStatus',$order->id)}}" method="POST">
      @csrf

<td><select id="order status" name="newStatus">
  <option value="Placed">Placed</option>
  <option value="Dispached">Dispached</option>
  <option value="Delivered">Delivered</option>
</select></td>
<!--update button-->
<td><button type="submit" onclick="myAlert()" class="btn">Update Order Status</button></td>
      </form>

</tr>
@endforeach
</table>



<h1>Customers' Queries</h1>
<table>
<tr>
<td>Query ID</td>
<td>Email</td>
<td>Name</td>
<td>Query</td>

</tr>
@foreach($queries as $query)
<tr>
<td>{{$query['id']}}</td>
<td>{{$query['email']}}</td>
<td>{{$query['name']}}</td>
<td>{{$query['query']}}</td>
</tr>
@endforeach
</table>





</body>
</html>









