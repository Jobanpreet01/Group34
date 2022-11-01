<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
  
?>


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

   <script src= "js/script.js"></script> <!-- links the javascript to the page -->

</head>
<body>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #0eb582;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>

</html>
   
<!-- header section starts  -->

<header class="main-header">

   <a href="#" class="logo"> <i class="fas fa-id-card"></i> <?php echo $user_data['name']; ?> </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the headers to be clicked and take the user to the different pages -->
      <a href="index.php">Home</a>
      <a href="products.php" class="link">Products</a>
      <a href="contact.php">Contact Us</a>
      <a href="basket.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
      <a href="logout.php">Logout</a>
   </nav>

</header>

<!-- header section ends -->

<section class="heading-link">
   <h3>Products</h3>
   <p> <a href="index.php">home</a> / products </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<section class="footer">

   <div class="box-container">

      <div class="box">

</div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php" class="link">Home</a> <!-- creates links to all pages in the footer -->
         <a href="products.php" class="link">Products</a>
         <a href="contact.php" class="link">Contact Us</a>
         <a href="basket.php" class="link">Basket</a>
      </div>

   </div>

   <div class="credit"> created by <span>Group 34</span></div>

</section>

</body>
</html>

<!-- footer section ends -->

<style type="text/css">

@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
* {
  font-family: 'Nunito', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

img {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
}

html::-webkit-scrollbar {
  width: 1rem;
}

html::-webkit-scrollbar-track {
  background: transparent;
}

html::-webkit-scrollbar-thumb {
  background: #0eb582;
}

section {
  padding: 5rem 10%;
}

.heading-link {
  text-align: center;
  background: url(../images/banner.jpeg) no-repeat; /* https://www.ppt-backgrounds.net/banner/9762-bubble-light-banner-wallpaper-downloads-backgrounds.html */
  background-size: cover;
  background-position: center;
}

.heading-link h3 {
  font-size: 4rem;
  text-transform: capitalize;
  color: #444;
}

.heading-link p {
  font-size: 2rem;
  line-height: 2;
  color: #777;
}

.heading-link p a {
  color: #0eb582;
}

.heading-link p a:hover {
  text-decoration: underline;
}

.heading {
  text-align: center;
  margin-bottom: 3rem;
  font-size: 3.5rem;
  text-transform: capitalize;
  color: #444;
}

.btn {
  display: inline-block;
  margin-top: 1rem;
  padding: 1rem 3rem;
  font-size: 1.8rem;
  border: 0.1rem solid #0eb582;
  background: #f0fdfa;
  color: #0eb582;
  cursor: pointer;
  text-transform: capitalize;
}

.btn:hover {
  background: #0eb582;
  color: #fff;
}

.main-header {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  background: #fff;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  padding: 2rem 10%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  z-index: 1000;
}

.main-header .logo {
  margin-right: auto;
  font-size: 2.5rem;
  text-transform: capitalize;
  color: #444;
  font-weight: bolder;
}

.main-header .logo i {
  color: #0eb582;
}

.main-header .navbar {
  position: relative;
}

.main-header .navbar #close-navbar {
  position: absolute;
  top: 1.5rem;
  right: 2rem;
  font-size: 4rem;
  cursor: pointer;
  color: #444;
  display: none;
}

.main-header .navbar #close-navbar:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.main-header .navbar a {
  margin-right: 2rem;
  font-size: 2rem;
  text-transform: capitalize;
  color: #444;
}

.main-header .navbar a:hover {
  color: #0eb582;
}

.main-header .icons div {
  cursor: pointer;
  font-size: 2.5rem;
  color: #444;
  margin-left: 1.5rem;
}

.main-header .icons div:hover {
  color: #0eb582;
}

.footer {
  background: #f0fdfa;
}

.footer .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 2rem;
}

.footer .box-container .box h3 {
  font-size: 2.2rem;
  text-transform: capitalize;
  color: #444;
  padding: 1rem 0;
}

.footer .box-container .box h3 i {
  color: #0eb582;
}

.footer .box-container .box .share a {
  height: 4.5rem;
  width: 4.5rem;
  line-height: 4.5rem;
  font-size: 1.7rem;
  background-color: #0eb582;
  color: #fff;
  margin-right: .3rem;
  text-align: center;
}

.footer .box-container .box .share a:hover {
  background-color: #444;
}

.footer .box-container .box .link {
  font-size: 1.7rem;
  line-height: 2;
  color: #777;
  padding: .5rem 0;
  display: block;
}

.footer .box-container .box .link:hover {
  color: #0eb582;
  text-decoration: underline;
}

.footer .box-container .box p {
  font-size: 1.5rem;
  line-height: 2;
  color: #777;
  padding: 1rem 0;
}

.footer .credit {
  text-align: center;
  margin-top: 3rem;
  padding-top: 3rem;
  font-size: 2rem;
  text-transform: capitalize;
  color: #444;
  border-top: 0.1rem solid #0eb582;
}

.footer .credit span {
  color: #0eb582;
}

@media (max-width: 1200px) {
  .header {
    padding: 2rem 5%;
  }
  section {
    padding: 3rem 5%;
  }
}

@media (max-width: 991px) {
  html {
    font-size: 55%;
  }
  .header {
    padding: 2rem;
  }
  section {
    padding: 3rem 2rem;
  }
}

@media (max-width: 768px) {
  .header #menu-btn {
    display: inline-block;
  }
  .header .navbar {
    position: fixed;
    top: 0;
    right: -105%;
    width: 30rem;
    background: #fff;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    z-index: 1200;
  }
  .header .navbar #close-navbar {
    display: block;
  }
  .header .navbar.active {
    -webkit-box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.8);
            box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.8);
    right: 0;
  }
  .header .navbar a {
    display: block;
    margin: 1rem 0;
    text-align: center;
    font-size: 3rem;
  }
  .home .slide .content h3 {
    font-size: 3rem;
  }
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
  .heading {
    font-size: 3rem;
  }
}

</body>
</html>