<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>

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

   <a href="#" class="logo"> <i class="fas fa-id-card"></i></a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the headers to be clicked and take the user to the different pages -->
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}">Contact Us</a>
      <a href="{{url('/basket')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
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
   <h3>Products</h3>
   <p> <a href="{{url('/')}}">home</a> / products </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

      <section class="products">

<h1 class="heading">Our Products</h1>

<div class="box-container"> <!-- creates the box for the image and text to be placed in -->

   <div class="product">
      <img src="images/iphone.jpg" alt=""> <!-- https://www.apple.com/uk/newsroom/2022/09/apple-introduces-iphone-14-and-iphone-14-plus/ -->
      <h3>iPhone 14</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/hp.webp" alt=""> <!-- https://www.hp.com/gb-en/shop/product.aspx?id=6w7l7ea&opt=abu&sel=ntb -->
      <h3>HP Laptop</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/PS5.webp" alt=""> <!-- https://direct.playstation.com/en-gb/buy-consoles/playstation5-console -->
      <h3>PS5</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/samsung.jpg" alt=""> <!-- https://www.costco.co.uk/TVs-Electronics-Security/Televisions-Projectors/Televisions/Samsung-UE58AU7100KXXU-58-Inch-4K-Ultra-HD-Smart-TV/p/394568 -->
      <h3>Samsung TV</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/acer.jpg" alt=""> <!-- https://www.portusdigital.com/acer-predator--xb253q-gw-245--full-hd-wled-240hz-gaming-monitor-10164-p.asp -->
      <h3>Acer Monitor</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/airpods.jfif" alt=""> <!-- https://www.apple.com/uk/shop/product/MQD83ZM/A/airpods-pro -->
      <h3>Airpods Pro</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/ipad.jfif" alt=""> <!-- https://www.apple.com/uk/shop/product/FXAV2B/A/refurbished-129-inch-ipad-pro-wi-fi-512gb-space-gray-4th-generation -->
      <h3>iPad Pro</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/mac-book.jpg" alt=""> <!-- https://www.apple.com/uk/newsroom/2020/05/apple-updates-13-inch-macbook-pro-with-magic-keyboard-double-the-storage-and-faster-performance/ -->
      <h3>MacBook Pro</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/apple-watch.jfif" alt=""> <!-- https://www.apple.com/uk/shop/product/FQKW2B/A/Refurbished-Apple-Watch-Series-3-GPS-38mm-Gold-Aluminum-Case-with-Pink-Sand-Sport-Band -->
      <h3>Apple Watch Series 3</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/samsung-flip.jpg" alt=""> <!-- https://www.amazon.co.uk/Samsung-Smartphone-Android-Folding-Version/dp/B09FQBDHJH -->
      <h3>Samsung Galaxy Z Flip 3</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/x-box.jpg" alt=""> <!-- https://www.smythstoys.com/uk/en-gb/video-games-and-tablets/xbox-gaming/xbox-series-x-%7C-s/xbox-series-x-%7C-s-consoles/xbox-series-x-1tb-console/p/192012 -->
      <h3>Xbox Series X</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>

   <div class="product">
      <img src="images/nintendo-switch.jpg" alt=""> <!-- https://www.ign.com/games/nintendo-switch -->
      <h3>Nintendo Switch</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
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
      <a href="{{url('/basket')}}" class = "link"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
      </div>

   </div>

   <div class="credit"> created by <span>Group 34</span></div>

</section>

</body>
</html>

</body>
</html>
