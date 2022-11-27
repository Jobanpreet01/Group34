<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css"> <!-- links the styles sheet to the home page -->

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

   <a href="#" class="logo"> <i class="fas fa-id-card"></i></a>

   <nav class="navbar">
   
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the user to select the page they want using the navigation bar at the top -->
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

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/Logo.png);" >
            <div class="content">
            <h3>Welcome To Vitality Electronics</h3>
               </div>
         </section>
      </div>
      </div>

</section>

<section class="contact-me">

<h1 class="heading"> Our Influence Worldwide </h1>

<div class="submit">

   <div class="icons">
      <i class="fas fa-globe"></i>
      <h3>Global Reach :</h3>
      <p>We are currently located in 108 countries and this is still expanding with us located in Europe, Asia, North and South America.</p>
   </div>

   <div class="icons">
      <i class="fas fa-dollar"></i>
      <h3>Total Revenue :</h3>
      <p>In 2021 we had our best sales yet with revenue at 300 million which was reflected in our global expansion and expansion of tech products being sold.</p>
   </div>

   <div class="icons">
      <i class="fas fa-phone"></i>
      <h3>Customer Service : </h3>
      <p>At vitalityelectronics we provide the best customer care by replying to you within 24 hours of your query and we strive for this to provide the best possible customer experience.</p>
   </div>

   <div class="icons">
      <i class="fas fa-truck"></i>
      <h3>Delivery :</h3>
      <p>We provide free delivery for orders over £50 and provide next day delivery.</p>
   </div>

</div>

<section class="contact-me">

<h1 class="heading"> What We Specialise In </h1>

<div class="submit">

   <div class="icons">
      <i class="fas fa-phone"></i>
      <h3>Phones</h3>
   </div>

   <div class="icons">
      <i class="fas fa-laptop"></i>
      <h3>Laptops</h3>
      </div>

   <div class="icons">
      <i class="fas fa-tv"></i>
      <h3>TVs</h3>
      </div>

   <div class="icons">
      <i class="fas fa-gamepad"></i>
      <h3>Consoles</h3>
      </div>

      <div class="icons">
      <i class="fas fa-headphones"></i>
      <h3>Headphones</h3>
      </div>
      
      <div class="icons">
      <i class="fas fa-print"></i>
      <h3>Printers</h3>
      </div>

</div>


<!-- home section ends -->
   

<!-- footer section starts  -->

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

<!-- footer section ends -->

<style type="text/css">


</body>
</html>
