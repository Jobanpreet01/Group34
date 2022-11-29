<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>
   <link rel="shortcut icon" type="image/png" href="images/fav2.png"/>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css"> <!-- links the styles sheet to this page -->

   <script src= "js/script.js"></script> <!-- links the javascript to the page -->

</head>
<body>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type= "text/css" href="css/Style.css" />

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
      @guest <!-- if user is loged in, this will not appear  -->
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
      @endguest

      <?php if(auth()->user()->type ?? 1): ?>
      <a id="navbarDropdown" class="nav-link dropdown-toggle" 
        href= "{{url('/home')}}"
    
          role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         {{ @Auth::user()->name }}
      </a>
      <?php endif; ?>
      


      
      <?php if(auth()->user()->type ?? 0): ?>
      <a id="navbarDropdown" class="nav-link dropdown-toggle" 
        href= "{{url('/admin')}}"
    
          role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         Admin
      </a>
      <?php endif; ?>
   </nav>

</header>

<!-- header section ends -->

<section class="heading-link">
   <h3>Contact Us</h3>
   <p> <a href="{{url('/')}}">home</a> / contact </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

      <section class="contact-me">

<h1 class="heading"> get in touch </h1>

<div class="main">

   <form action = "{{url('/contact')}}" class="form-container">
   @csrf

       <label for="email">Email</label>
       <input type="text" id="email" placeholder="Enter Email" class="box" name="email1" required = "Please Insert Email">

       <label for="name">Name</label>
       <input type="text" id="name" placeholder="Name" class="box" name="name1" required = "Please Insert Name">

       <label for="query">Query</label>
       <input type="text" id="query" placeholder="Query" class="box" name="query1" required = "Please Insert Your Query">

       <button type="submit" onclick="" class="btn">Send Message</button>
       
   </form>
</div>

<div class="submit">

   <div class="icons">
      <i class="fas fa-clock"></i>
      <h3>Opening Hours :</h3>
      <p>09:00am to 17:00pm</p>
   </div>

   <div class="icons">
      <i class="fas fa-phone"></i>
      <h3>Phone Number :</h3>
      <p>07772456428</p>
   </div>

   <div class="icons">
      <i class="fas fa-envelope"></i>
      <h3> Email : </h3>
      <p>support@vitalityelectronics.com</p>
   </div>

   <div class="icons">
      <i class="fas fa-map"></i>
      <h3>Location :</h3>
      <p>Birmingham, England</p>
   </div>

</div>
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
         <a href="{{url('/')}}" class = "link">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}" class = "link">Contact Us</a>
      </div>

   </div>

   <div class="credit"> created by <span>Group 34</span></div>

</section>

</body>
</html>

<style type="text/css">


</body>
</html>
