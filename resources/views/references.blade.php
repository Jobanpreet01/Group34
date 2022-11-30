<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="shortcut icon" type="image/png" href="images/fav2.png"/>
   
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

<a href="{{url('/')}}" class="logo"><img src="images/Fav.png" alt="Logo2" width="50" height="50"></a>

   <nav class="navbar">
   
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the user to select the page they want using the navigation bar at the top -->
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}">Contact Us</a>
      <a href="{{url('/about')}}">About Us</a>
      @guest <!-- if user is loged in, this will not appear  -->
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
      @endguest

      <?php if(@Auth::user()->name != null) : ?>
      <?php if(@Auth::user()->name != 'Admin') : ?>
      <?php if(auth()->user()->type ?? 1): ?>
      <a id="navbarDropdown" class="nav-link dropdown-toggle" 
        href= "{{url('/home')}}"
    
          role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         {{ @Auth::user()->name }}'s Basket
      </a>
      <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
      

      
      <?php if(@Auth::user()->name == 'Admin') : ?>
      <?php if(auth()->user()->type ?? 0): ?>
      <a id="navbarDropdown" class="nav-link dropdown-toggle" 
        href= "{{url('/admin')}}"
    
          role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         Admin
      </a>

      <?php endif; ?>
      <?php endif; ?>
      
   </nav>

</header>

<!-- header section ends -->

<section class="products">
<section class="heading-link">
   <h3>Reference of the images used on the website</h3>
</section>
</section>

<style>
li{
font-size: 20px;
}
</style>

<section class="products">
<li>Apple, N., (2018) Play Station 5. [ONLINE]. Available at: <a href="https://direct.playstation.com/en-gb/buy-consoles/playstation5-console">https://direct.playstation.com/en-gb/buy-consoles/playstation5-console</a> [Accessed 10 October 2022].</li>
<li>HP, N., (2018) HP Pavilion Laptop 15-eg2022na Touchscreen Laptop - Core™ i5, Blue. [ONLINE]. Available at: <a href="https://www.hp.com/gb-en/shop/product.aspx?id=6w7l7ea&opt=abu&sel=ntb">https://www.hp.com/gb-en/shop/product.aspx?id=6w7l7ea&opt=abu&sel=ntb</a> [Accessed 10 October 2022].</li>
<li>Samsung, N., (2018) Samsung UE58AU7100KXXU 58 Inch 4K Ultra HD Smart TV. [ONLINE]. Available at: <a href="https://www.costco.co.uk/TVs-Electronics-Security/Televisions-Projectors/Televisions/Samsung-UE58AU7100KXXU-58-Inch-4K-Ultra-HD-Smart-TV/p/394568">https://www.costco.co.uk/TVs-Electronics-Security/Televisions-Projectors/Televisions/Samsung-UE58AU7100KXXU-58-Inch-4K-Ultra-HD-Smart-TV/p/394568</a> [Accessed 10 October 2022].</li>
<li>Apple, N., (2018) AirPods Pro (2nd generation). [ONLINE]. Available at: <a href="https://www.apple.com/uk/shop/product/MQD83ZM/A/airpods-pro">https://www.apple.com/uk/shop/product/MQD83ZM/A/airpods-pro</a> [Accessed 10 October 2022].</li>
<li>Apple, N., (2018) iPhone 14. [ONLINE]. Available at: <a href="https://www.apple.com/uk/newsroom/2022/09/apple-introduces-iphone-14-and-iphone-14-plus/">https://www.apple.com/uk/newsroom/2022/09/apple-introduces-iphone-14-and-iphone-14-plus/</a> [Accessed 10 October 2022].</li>
<li>Apple, N., (2018) iPad Pro. [ONLINE]. Available at: <a href="https://www.apple.com/uk/shop/product/FXAV2B/A/refurbished-129-inch-ipad-pro-wi-fi-512gb-space-gray-4th-generation">https://www.apple.com/uk/shop/product/FXAV2B/A/refurbished-129-inch-ipad-pro-wi-fi-512gb-space-gray-4th-generation</a> [Accessed 10 October 2022].</li>
<li>Apple, N., (2018) Apple Watch Series 3. [ONLINE]. Available at: <a href="https://www.apple.com/uk/shop/product/FQKW2B/A/Refurbished-Apple-Watch-Series-3-GPS-38mm-Gold-Aluminum-Case-with-Pink-Sand-Sport-Band">https://www.apple.com/uk/shop/product/FQKW2B/A/Refurbished-Apple-Watch-Series-3-GPS-38mm-Gold-Aluminum-Case-with-Pink-Sand-Sport-Band</a> [Accessed 10 October 2022].</li>
<li>Apple, N., (2018) MacBook Pro. [ONLINE]. Available at: <a href="https://www.apple.com/uk/newsroom/2020/05/apple-updates-13-inch-macbook-pro-with-magic-keyboard-double-the-storage-and-faster-performance/">https://www.apple.com/uk/newsroom/2020/05/apple-updates-13-inch-macbook-pro-with-magic-keyboard-double-the-storage-and-faster-performance/</a> [Accessed 10 October 2022].</li>
<li>Samsung, N., (2018) Samsung Galaxy Z Flip3. [ONLINE]. Available at: <a href="https://www.amazon.co.uk/Samsung-Smartphone-Android-Folding-Version/dp/B09FQBDHJH">https://www.amazon.co.uk/Samsung-Smartphone-Android-Folding-Version/dp/B09FQBDHJH</a> [Accessed 10 October 2022].</li>
<li>Microsoft, N., (2018) Xbox Series X 1TB Console. [ONLINE]. Available at: <a href="https://www.smythstoys.com/uk/en-gb/video-games-and-tablets/xbox-gaming/xbox-series-x-%7C-s/xbox-series-x-%7C-s-consoles/xbox-series-x-1tb-console/p/192012">https://www.smythstoys.com/uk/en-gb/video-games-and-tablets/xbox-gaming/xbox-series-x-%7C-s/xbox-series-x-%7C-s-consoles/xbox-series-x-1tb-console/p/192012</a> [Accessed 10 October 2022].</li>
<li>Nintendo Co. Ltd., N., (2018) Nintendo Switch. [ONLINE]. Available at: <a href="https://www.ign.com/games/nintendo-switch">https://www.ign.com/games/nintendo-switch</a> [Accessed 10 October 2022].</li>
<li>Acer, N., (2018) Acer Predator X 37. [ONLINE]. Available at: <a href="https://www.scan.co.uk/products/375-acer-predator-x-umtx0ees02-monitor-ips-3840x1600-03ms-175hz-g-sync-ultimate-dp-hdmi">https://www.scan.co.uk/products/375-acer-predator-x-umtx0ees02-monitor-ips-3840x1600-03ms-175hz-g-sync-ultimate-dp-hdmi</a> [Accessed 10 October 2022]</li>



</section>

<!-- footer section starts  -->
<section class="products">



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

         <a href="{{url('/')}}" class = "link">Home</a>
      <a href="{{url('/products')}}" class="link">Products</a>
      <a href="{{url('/contact')}}" class = "link">Contact Us</a>
      <a href="{{url('/about')}}" class = "link">About Us</a>
      <a style="text-decoration:none" href="{{url('/references')}}" class = "link">References</a>

      </div>

   </div>

   <div class="credit"> created by <span>Group 34</span></div>

   </section>
   </section>

<!-- footer section ends -->

<style type="text/css">


</body>
</html>
