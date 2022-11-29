<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   <link rel="shortcut icon" type="image/png" href="images/fav2.png"/>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css"> <!-- links the styles sheet to this page -->

   <link rel = "stylesheet" type= "text/css" href="css/Style.css" />

   <script src= "js/script.js"></script> <!-- links the javascript to the page -->

</head>
<body>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

</html>
   
<!-- header section starts  -->



<header class="main-header">

   <a href="{{url('/')}}" class="logo"><img src="images/Fav.png" alt="Logo2" width="50" height="50"></a>


   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the headers to be clicked and take the user to the different pages -->
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}">Contact Us</a>
      <a href="{{url('/basket')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
      <a href="{{url('/about')}}">About Us</a>
      @guest <!-- if user is loged in, this will not appear  -->
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
      @endguest

      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{url('/home')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         {{ @Auth::user()->name }}
      </a>
   </nav>

</header>

<!-- header section ends -->

<section class="heading-link">
   <h3>Checkout</h3>
   <p> <a href="index.php">home</a> / checkout </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

      <section class="products">

<h1 class="heading">Checkout</h1>

</section>

<section class=""> 
  <form action="">
      <div>
         <label class="checkout-header" for="name">Name:</label>  <!-- The forms the user fills in -->
         <input class="checkout-form" type="text" name="name" id="name" placeholder="Enter your name">
      </div>
      <div>
         <label class="checkout-header" for="cardnumber">Card number:</label>
         <input class="checkout-form" type="number" name="cardnumber" id="cardnumber" placeholder="Enter your card number">
      </div>
      <div>
         <label class="checkout-header" for="billingaddress">City:</label>
         <input class="checkout-form" type="text" name="billingaddress" id="billingaddress" placeholder="Enter your address">
      </div>
      <div>
         <label class="checkout-header" for="street">Street:</label>
         <input class="checkout-form" type="text" name="street" id="street" placeholder="Enter your street">
      </div>
         <label class="checkout-header" for="billingaddress">House number:</label>
         <input class="checkout-form" type="number" name="housenumber" id="housenumber" placeholder="Enter your house number">
      <div>
         <label class="checkout-header" for="postcode">Post code:</label>
         <input class="checkout-form" type="text" name="postcode" id="postcode" placeholder="Enter your post code">
      </div>
         <input class="checkout-button" type="submit" value="Submit">
  </form>
  </section>



<section class="footer">

  <div class="box-container">

    <div class="box">
    <h3>Vitality Electronics</h3>
        <p>Welcome to our e-commerce website where we sell a large range of tech products. This company has been going for 15 years and we are proud to have over 100 million users and we are located all over the world with many connections in all parts of the world, which has allowed for us to expand globally and a fast rate. We look forward to you shopping with us and if you have any queries please feel free to find our contact details under the contacts section.</p>
        <div class="share">

         
</div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php" class="link">Home</a> <!-- allows the user to navigate through the pages using the links in the footer -->
         <a href="products.php" class="link">Products</a>
         <a href="contact.php" class="link">Contact Us</a>
         <a href="basket.php" class="link">Basket</a>
         <a href="about.php" class="link">About us</a>
      </div>

   </div>

   <div class="credit"> created by <span>Group 34</span></div>

</section>

</body>
</html>

</body>
</html>
