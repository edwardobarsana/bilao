<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>
<html>
<head>
<link rel="stylesheet" href="menu.css">
<?php 
// include ("navigation.html");
?>
<style type="text/css">
body {
  background-image: url('homepagebg.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
#greeting{
	position: absolute;
	top:250;
	right:20;
	width: 530px;
	margin: 0;
	color:#000;
	font-size: 60px;
	font-family: Arial, Helvetica, sans-serif;
}

#buy{
	position: absolute;
	top:470;
	right:250;
	margin: 0;
	color:#000;
	color:#999;
	font-size: 30;
	background:rgba(0, 0, 0);
	padding: 9px 20px;
	border-radius: 50px;
	text-decoration: none;
	transition: all 0.3s ease 0s;
	border-bottom: none;
}
#buy:hover {
  background:rgba(128,128,128);
  color:white;
  border-bottom: none;
}
</style>
<body>
<nav>
		<a href="index.php" class="navlogo"><b>MATES BILAO</b></a>
		<ul class="navlinks">
          <li><a href="Form.php">Order</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="logout.php" class="Sign">Logout</a></li>
        </ul>
	 </nav> 
<div>
<h2 id="greeting" > "Happiness is making  your stomach full" </h2>
<a id="buy" href="Form.php">Order Now!</a>
</div>
</body>
</html>