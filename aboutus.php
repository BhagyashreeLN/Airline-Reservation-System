<?php
	session_start();
?>
<html>
	<head>
		<title>
			About Us
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			SUNRISE AIRLINES
		</h1>
		<div>
			<ul>
        <li class="company"><img src="css/logo.jpg" id="altlogo"><a href="home_page.php"><!-- <i class="fa fa-home" aria-hidden="true"></i> --> SUNRISE AIRLINES</a></li>
				<li class="home"><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="aboutus.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contactus.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
	<div>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  height: 45%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  /*background-color: #474e5d;*/
  background-image: url("images/x.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  color: white;
  font-weight: 900;
  font-family: Ubuntu;
}
.about-section p
{ 
  margin:auto;
  font-size:18px;
  width:650px;
  text-align:center;
}
.about-section h1
{ 
  margin-top:auto;
  margin-bottom:auto;
  text-align:center;
}
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
  text-align: center;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.newh2
{ padding-left:0;
  color:black;
  text-align:center;
  font-size:20px;
}
.team
{
  font-size:30px;
}
</style>
</head>
<body>



<div class="about-section">
  <h1>About Us</h1>
  <p>Sunrise Airlines connects India to, and through, our global hub in Mumbai.</p>
  <p>We operate modern, efficient and comfortable aircraft, 
      and our culturally diverse workforce delivers award-winning services to our customers across six states every day.</p>
</div>

<h2 style="text-align:center" class="newh2 team">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/plane.jpg" alt="Battina" style="width:100%">
      <div class="container">
        <h2 class="newh2">Battina</h2>
        <p class="title">CS Student</p>
        <p></p>
        <p></p>
        <p><button class="button" onclick="window.location.href='contactus.html'" >Contact</button></p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="images/plane.jpg" alt="Bhagyashree" style="width:100%">
      <div class="container">
        <h2 class="newh2">Bhagyashree</h2>
        <p class="title">CS Student</p>
        <p></p>
        <p></p>
        <p><button class="button" onclick="window.location.href='contactus.html'">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/plane.jpg" alt="Jerin" style="width:100%">
      <div class="container">
        <h2 class="newh2">Jerin</h2>
        <p class="title">CS Student</p>
        <p></p>
        <p></p>
        <p><button class="button" onclick="window.location.href='contactus.html'">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/plane.jpg" alt="Justin" style="width:100%">
      <div class="container">
        <h2 class="newh2">Justin</h2>
        <p class="title">CS Student</p>
        <p></p>
        <p></p>
        <p><button class="button" onclick="window.location.href='contactus.html'">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

	</div>
</body>
</html>
