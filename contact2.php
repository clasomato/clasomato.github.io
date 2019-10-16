<?php
if($_POST["message"]) {
    mail("climostudios@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Climo Stuidos | Contact</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bevan&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="media/csico.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--<body background="media/bg2.png">-->
<body>
  <div class="topnav" id="myTopnav">
  		<a href="index.html" class="nava">Home</a>
      <a href="portfolio.html" class="nava">Portfolio</a>
      <!--<a href="#">Shop</a>-->
  		<a href="contact.html" id="active" class="nava">Contact</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    	<i class="fa fa-bars"></i>
  		</a>
	</div>

	<script>
		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
		function myFunction() {
  			var x = document.getElementById("myTopnav");
  		if (x.className === "topnav") {
    		x.className += " responsive";
  		} else {
    	x.className = "topnav";
  		}
		}
	</script>

<div class="contactText">
  <h1 class="contacth1">Contact Details</h1>
  <h2 class="contacth2"><span class="contactPoint">Email:</span> climostudios@gmail.com</h2>
  <h2 class="contacth2"><span class="contactPoint">Phone Number:</span> 04-4793829</h2>
  <h2 class="contacth2">Message us on facebook!</h2>
  <p class="contactP">We typically respond in less than half a day althoug depending on when
  you email or message it may take a while longer.</p>

  <br>
  <form class="contactForm" action="contact2.php" method="POST">
    <fieldset>
      <legend>Get a Quote</legend>
      <input type="text" name="firstname" value="" placeholder="Firstname">
      <br>
      <br>
      <input type="text" name="lastname" value="" placeholder="Lastname">
      <br>
      <br>
      <input type="text" name="email" value="" placeholder="Email">
    </fieldset>

    <br>
    <fieldset>
      <legend>Type of Work</legend>
      <input type="radio" name="type" value="logo" checked>Logo <br>
      <input type="radio" name="type" value="website">Website <br>
      <input type="radio" name="type" value="other">Other
      <br>
      <br>
      <input type="submit">
    </fieldset>


  </form>

</div>

<!--<div class="contactImgcontainer">
  <img src="media/jason2.png" alt="Low-Poly Artwork" class="contactImg">
</div>-->



</body>
<!--Footer
<div class="footer">
  <h4 class="footerh4">Copyright: Climo Studios 2019 &copy;</h4>
  <div class="footerLinks">
    <a href="https://www.instagram.com/climo_studios/?hl=en" target="_blank"><img src="icons/instagram.png" alt="The logo of instagram" title="Link to instagram" class="footerImg"></a>
  </div>
</div>-->
