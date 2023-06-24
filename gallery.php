<html>
 <head>
 <?php 
include ("navigation.html");
?>
<div class="gal">
<h2>WHAT WE OFFER</h2>
<p>Mates Bilao offers different filipino foods that can be serve<br>&nbsp;in different sizes which can be enjoyed with your loveones.</p>
</div></head>
<style type="text/css">
.gal{
	float: center;
}
.gal h2 {
	color:#000;
	margin: 0px;
	text-align: right;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
}
.gal p {
	color:#000;
	text-align: justify;
	font-size: 20px;
	margin:0px 350px;
	font-family: "Courier New", monospace;
	font-weight: bold;
}
.container {
  display: flex;
  width: 100%;
  padding: 4% 2%;
  box-sizing: border-box;
  height: 60vh;
}

.box {
  flex: 1;
  overflow: hidden;
  transition: .5s;
  margin: 0 2%;
  box-shadow: 0 20px 30px rgba(0,0,0,.1);
  line-height: 0;
}

.box > img {
  width: 200%;
  height: calc(100% - 10vh);
  object-fit: cover; 
  transition: .5s;
}

.box > span {
  font-size: 3.8vh;
  display: block;
  text-align: center;
  height: 10vh;
  line-height: 2.6;
}

.box:hover { flex: 1 1 50%; }
.box:hover > img {
  width: 100%;
  height: 100%;
}
</style>
<body>
<div class="container">
  <div class="box">
    <img src="Images/img1.jpg">
    <span>Spaghetti</span>
  </div>
  <div class="box">
    <img src="Images/img2.jpg">
    <span>Pancit Bihon</span>
  </div>
  <div class="box">
    <img src="Images/img3.jpg">
    <span>Pancit Palabok</span>
  </div>
  <div class="box">
    <img src="Images/img8.jpg">
    <span>Pancit Canton</span>
  </div>
</div>
 </body>
</html>