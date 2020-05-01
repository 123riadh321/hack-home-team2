<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <title>Get Tests</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="kobbiswiper.min.css">
  <link rel="stylesheet" type="text/css" href="kobbistyle_model.css">
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
      echo'<a href="login.php"class="info"><h2>Sing in</h2></a> 
      <a href="register.php"class="info"><h2>Sing up</h2></a>';
    }
    else {
      echo '<a href="kobbiabout.php" class="info"><h2>About us</h2></a><a href="kobbiprofile.html" class="img"><img src="kobbiprofile.png" width="25px" height="25px"></a><a href="logout.php"class="info"><h2>Sing out</h2></a>
      ';
    }
   ?>
  </header>
  <main>
 <section>
  <div class="side1">
    <h2>Categories</h2>
    <a href="index_model.html"><h3>Categorie 1</h3></a>
    <a href="index_model.html"><h3>categorie 2</h3></a>
    <a href="index_model.html"><h3>categorie 3</h3></a>
    <a href="index_model.html"><h3>categorie 4</h3></a>
    <a href="index_model.html"><h3>categorie 5</h3></a>
    <a href="index_model.html"><h3>categorie 6</h3></a>
    <a href="index_model.html"><h3>categorie 7</h3></a>
    <a href="index_model.html"><h3>categorie 8</h3></a>
    <a href="index_model.html"><h3>categorie 9</h3></a>
    <a href="index_model.html"><h3>categorie 10</h3></a>
    <a href="index_model.html"><h3>categorie 11</h3></a>
  </div>
  <div class="side2">
    <a href=""><h3>Start your new job</h3></a>  
    <a href=""><h3>chheyd</h3></a>
    <a href=""><h3>Have new skills</h3></a>
    <a href="kobbiabout.php"><h3>About Us</h3></a>
    <a href=""><h3>contact US</h3></a>
    <p>Made by Team2</p>
    <img src="kobbismartec.png">
  </div>
  </section>
    <div class="fazza">
    <h1>HTML employement test</h1>
    <p>this test is made by EliteNet</p>
    <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__QS1k61URFJaSDJDNUpONDlBUEsxVUdMN1lUM0g1Uy4u"><button id="button">Start the test</button></a>
  </div>
 <div class="box">
  <h1>HTML</h1>
  <img src="kobbihtml.png">
  <input type="email" name="" placeholder="Notes(optionelle)">
  <a href="" id="extra"><button><h2>Send</h2></button></a>
  <a href="https://www.udemy.com/?utm_source=adwords-brand&utm_medium=udemyads&utm_campaign=Brand-Udemy_la.EN_cc.ROW&utm_term=_._ag_80315195513_._ad_386251995970_._de_c_._dm__._pl__._ti_aud-568228300785:kwd-310556426868_._li_9073723_._pd__._&utm_term=_._pd__._kw_udemy_._&matchtype=e&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyKleENKw1tdgAP7THFRR4_WiFODetJIElCaQ9fFnFYDAJxBEC6jG-waAt3nEALw_wcB" ><button>Join online courses</button></a>
 </div>
 <h2 id="desc">Description</h2>
 <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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