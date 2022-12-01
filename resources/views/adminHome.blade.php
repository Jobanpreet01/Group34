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
      <a style="text-decoration:none" href="{{url('/')}}">Home</a>
      <a style="text-decoration:none" href="{{url('/products')}}" class="link">Products</a>
      <a style="text-decoration:none" href="{{url('/contact')}}">Contact Us</a>
      <a style="text-decoration:none" href="{{url('/about')}}">About Us</a>
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
.content-table {
    border-collapse: collapse;
    margin:25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow:hidden;
    box-shadow:0 0 20px rgba(0,0,0,0.15);
}
.content-table thead tr{
    background-color:#009878;
    color:#ffffff;
    text-align: left;
    font-weight:bold;
}
.content-table th,
.content-table td{
    padding:8px 10px;

}
.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;
}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid #009878;
}

</style>
<section class="products">
<h1>List of Users</h1>
<table class="content-table">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>
</thead>
@foreach($members as $user)
<tr>
<td>{{$user['id']}}</td>
<td>{{$user['name']}}</td>
<td>{{$user['email']}}</td>
</tr>
@endforeach
</table>


<h1>List of Products in stock</h1>
<table class="content-table">
<thead>
<tr>
<td>ID</td>
<td>Title</td>
<td>Description</td>
<td>Quantity</td>
<td> &nbsp &nbsp -- </td>
<td>Price</td>
</tr>
</thead>
@foreach($products as $product)
<tr>
<td>{{$product['id']}}</td>
<td>{{$product->Title}}</td>
<td>{{$product->Description}}</td>

<form action="{{url('updatequantity',$product->id)}}" method="POST">
      @csrf
<td><input type= "number" value= "{{$product->Quantity}}" min="0" class="form" name="quantity"></td>
<!--update button-->
<td><button style="background-color:#73b59e;box-shadow:0 0 20px rgba(0,0,0,0.15);" type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update Quantity</button></td>
      </form>

<td>£{{$product->Price}}</td>
</tr>
@endforeach
</table>











<h1>All orders from users</h1>
<table class="content-table">
<thead>
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
<td>Change Order Status </td>
<td><div style="text-align:center;">Change Order Status</div></td>

</tr>
</thead>
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
<td><button style="background-color:#73b59e;box-shadow:0 0 20px rgba(0,0,0,0.15);" type="submit" onclick="alert('Order Status Changed Successfully')" class="btn">Update Order Status</button></td>
      </form>

</tr>
@endforeach
</table>



<h1>Customers' Queries</h1>
<table class="content-table">
<thead>
<tr>
<td>Query ID</td>
<td>Email</td>
<td>Name</td>
<td>Query</td>

</tr>
</thead>
@foreach($queries as $query)
<tr>
<td>{{$query['id']}}</td>
<td>{{$query['email']}}</td>
<td>{{$query['name']}}</td>
<td>{{$query['query']}}</td>
</tr>
@endforeach
</table>


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









