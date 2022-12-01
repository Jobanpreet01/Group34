<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>
   <link rel="shortcut icon" type="image/png" href="images/fav2.png"/>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css"> <!-- links the styles sheet to this page -->

   <link rel = "stylesheet" type= "text/css" href="css/Style.css" />

   <script src= "js/script.js"></script> <!-- links the javascript to the page -->
   <script src= "searchbar.js"> </script>

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
   <h3>Products</h3>
   <p> <a href="{{url('/')}}">home</a> / products </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

      <section class="products">

<h1 class="heading">Our Products</h1>

<div>
      <input class=search-bar type="text" name="" id="search" placeholder="search for products..." onkeyup="searchBar()">
   </div>

   <!-- h4 used for for text description of the products in list -->
   <style>
   h4{
text-align: left;
padding-bottom: 5px;
text-transform: uppercase;
font-size: 10px;
color: #0D7354;
}

h5{
font-size: 8px;
text-align: left;
}

.selectQuantity{
text-align: center;
width:145px;
background-color: #d1e0e0;
}

</style>
<div class="box-container"> <!-- creates the box for the image and text to be placed in -->
 @foreach($storeData as $product)
   <div class="product">
      <img src="{{$product->Image}}" alt=""> <!--  -->
      <p><h4>Title:</h4> <h5>{{$product->Title}}</h5></p>
      <br>
      <p><h4>Description:</h4> <h5>{{$product->Description}}</h5></p>
      <br>
      <p><h4>Quantity Available:</h4> <h5>{{$product->Quantity}}</h5></p>
      <br>
      <p><h4>Price:</h4><h5>£{{$product->Price}}</h5></p>
      <br>
      <br>
      <!-- get quantity from user with this form-->
      <form action="{{url('home',$product->id)}}" method="POST">
      @csrf
      <input type= "number" value="1" min="1" max="{{$product->Quantity}}" class="selectQuantity" name="quantity">

      <button type="submit" onclick="alert('Basket Updated Successfully')" class="btn">Add to Basket</button>

      </form>


   </div>

   @endforeach

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
<script type="text/javascript">
function searchBar() {
  let searchText = document.getElementById('search').value.toUpperCase();
  let product = document.querySelectorAll('.product')
  let productName = document.getElementsByTagName('h5')

  for (var i = 0; i < productName.length; i++) {
    let match = product[i].getElementsByTagName('h5')[0];
    let textvalue = match.textContent || match.innerHTML || match.innerText
    if (match) {


      if (textvalue.toUpperCase().indexOf(searchText) > -1) {
        product[i].style.display ="";
      } else {
        product[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>
