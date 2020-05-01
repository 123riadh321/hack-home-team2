<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="kobbiswiper.min.css">
  <link rel="stylesheet" type="text/css" href="kobbistyle_about.css">
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
		<a href=""><h3>Categorie 1</h3></a>
		<a href=""><h3>categorie 2</h3></a>
		<a href=""><h3>categorie 3</h3></a>
		<a href=""><h3>categorie 4</h3></a>
		<a href=""><h3>categorie 5</h3></a>
		<a href=""><h3>categorie 6</h3></a>
		<a href=""><h3>categorie 7</h3></a>
		<a href=""><h3>categorie 8</h3></a>
		<a href=""><h3>categorie 9</h3></a>
		<a href=""><h3>categorie 10</h3></a>
		<a href=""><h3>categorie 11</h3></a>
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
  <section>
  	<div id="all">
  	<h1>ABOUT US</h1>
  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  	<h1>WHY SMARTEC</h1>
  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <h1>OUR POPULAIRE JOBS OFFER</h1>
    <div class="bg0">
    <div class="company" id="company1" >
      <a href=""><img src="kobbimicrosoft.png"></a>
      <div id="detail">
        <h3>Company Name: Microsoft</h3><br><h3>Salary: $200.000</h3><br>
        <h3>Place : Tunisia</h3><br><h3>Experience : profissional</h3><br>
      </div> 
    </div> 
        <div class="company" id="company0">
      <a href=""><img src="kobbimicrosoft.png"></a>
      <div id="detail">
        <h3>Company Name: Micosoft</h3><br><h3>Salary: $200.000</h3><br>
        <h3>Place : Tunisia</h3><br><h3>Experience : profissional</h3><br>
      </div> 
    </div>
        <div class="company" id="company2">
      <a href=""><img src="kobbimicrosoft.png"></a>
      <div id="detail">
        <h3>Company Name: Microsoft</h3><br><h3>Salary: $200.000</h3><br>
        <h3>Place : Tunisia</h3><br><h3>Experience : profissional</h3><br>
      </div> 
    </div>
        <div class="company" id="company1">
      <a href=""><img src="kobbimicrosoft.png"></a>
      <div id="detail">
        <h3>Company Name: Microsoft</h3><br><h3>Salary: $200.000</h3><br>
        <h3>Place : Tunisia</h3><br><h3>Experience : profissional</h3><br>
      </div> 
    </div>
        <div class="company" id="company0" id>
      <a href=""><img src="kobbimicrosoft.png"></a>
      <div id="detail">
        <h3>Company Name: Microsoft</h3><br><h3>Salary: $200.000</h3><br>
        <h3>Place : Tunisia</h3><br><h3>Experience : profissional</h3><br>
      </div> 
    </div> 
    </div>
  	<h2 class="h2">Hey YOU hurry up The fun is <b>waiting</b> join US for FREE</h2>
  	<a href="kobbilogin.html"><button><h2>JOIN US</h2></button></a>
  </div>
  </div>
  </section> 
  </main>
</body>
</html>