<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//  header("location: login.php");
// exit;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EliteNet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="kobbiswiper.min.css">
  <link rel="stylesheet" type="text/css" href="kobbistyle.css">
  <link rel="icon" type="image/png" href="kobbilogo.png">
</head>
<body>
  <header>
   <a href="welcome.php"><img src="kobbilogo.png"></a>
   <div class="search">
    <input class="input" id="input1" type="text" name="" placeholder="search...">
    <button class="input" id="input2">
      <img src="kobbisearch.png">
    </button>
  </div>
  <?php
    if (isset($_SESSION["username"])) {
      echo '<a href="kobbiabout.php" class="info"><h2>About us</h2></a><a href="kobbiprofile.html" class="img"><img src="kobbiprofile.png" width="25px" height="25px"></a><a href="logout.php"class="info"><h2>Sing out</h2></a>
      ';
    }
    else {
      echo'<a href="login.php"class="info"><h2>Sing in</h2></a> 
      <a href="register.php"class="info"><h2>Sing up</h2></a>';
    }
   ?>
  </header>
<img id="first" src="kobbiclouds.jpg">
  <main> 
    <div id="swiper-background">
 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><h1>Find Your Hidden Skills</h1><a href="index_model.php"><button>Now!</button></a></div>
      <div class="swiper-slide"><h1>Many companies are waiting For You</h1><a href="index_model.php"><button>Check them</button></a></div>
      <div class="swiper-slide"><h1>Tired of searching ? We can help you</h1><a href="index_model.php"><button>Join Us</button></a></div>
      <div class="swiper-slide"><h1>Have a discount on your best courses ever</h1><a href="index_model.php"><button>Join</button></a></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <script src="kobbiswiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      cssMode: true,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination'
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>
  </div>
  <div class="ads">
  <img src="kobbiwoman.jpg">
  <h1>"Choose a job you love,and you will never have to work a day in your life"</h1>
  <p>We provide you a big liste of jobs to be yourselfs and to be free</p>
</div>
<a href="index_model.php"><div class="cat1" id="cat01">Categorie1</div></a>
 <a href="index_model.php"><div class="cat2" id="cat01">Categorie2</div></a>
  <a href="index_model.php"><div class="cat3" id="cat01">Categorie3</div></a>
   <a href="index_model.php"><div class="cat4" id="cat01">Categorie4</div></a>
    <a href="index_model.php"><div class="cat5" id="cat02">Categorie5</div></a>
     <a href="index_model.php"><div class="cat6" id="cat02">Categorie6</div></a>
      <a href="index_model.php"><div class="cat7" id="cat02">Categorie7</div></a>
       <a href="index_model.php"><div class="cat8" id="cat02">Categorie8</div></a>
        <a href="index_model.php"><div class="cat9" id="cat03">Categorie9</div></a>
         <a href="index_model.php"><div class="cat10" id="cat03">Categorie10</div></a>
          <a href="index_model.php"><div class="cat11" id="cat03">Categorie11</div></a>
           <a href="index_model.php"><div class="cat12" id="cat03">Categorie12</div></a>
  <div class="about-us">
    <img src="kobbitree.jpg">
    <h2>About Us</h2>
    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris.</h3><a href="kobbiabout.php"><button>Learn More</button></a>
  </div>
  <div class="way">
    <div id="cover"></div>
    <img src="kobbisky.jpg">
    <h1>Discover your self...Find the way</h1>
    <a href="index_model.php"><button>Start</button></a>
  </div>
  <div class="get-test">
    <img src="kobbicomputer.jpg">
    <h1>No thing to lose try a test</h1>
    <a href="index_model.php"><button>Start a test</button></a>
  </div>
  </main>
    <footer>
      <div class="footer">
   <div class="left">
       <img src="kobbilogo.png" class="logo">
       <h2>EliteNet</h2>
                 <div class="social-media">
   <a href="https://www.facebook.com/riadh.benjemaa.18/%22%22%3E"><i class="fab fa-facebook-f"></i><img src="kobbifacebook.png"></a>
            <a href="https://twitter.com/JemaaRiadh%22%3E"><i class="fab fa-twitter"></i><img src="kobbitwitter.png"></a>
          <a href="https://www.instagram.com/riadh.ben.jemaa/%22%3E"><i class="fab fa-instagram"></i><img src="kobbiinstagram.png"></a>
          <a href="https://www.youtube.com/channel/UCA4TDV9f-05WaQ8lwlFsbYw?view_as=subscriber"><i class="fab fa-youtube"></i><img src="Kobbiyoutube.png"></a>
</div>
<p class="rights">@ 2020 Created By Team2 All Rights Reserved.</p>
        </div>
   <div id="services">
           <h1>Services</h1>
           <a href="kobbiabout.php">Companies</a>
           <a href="">Learn new skills</a>
           <a href="kobbiabout.php">About US</a>
   </div>
   <div class="right">
      <h1>Our Newsletter</h1>
 <div class="border"></div>
          <p>To contact us.</p>
          <form class="newsletter">
            <input type="text" class="text" placeholder="Enter Your Email">
       <input type="submit" class="submit" value="submit">
       <img src="kobbismartec.png">
</form>
  </div>
   </div>
    </footer>
</body>
</html>