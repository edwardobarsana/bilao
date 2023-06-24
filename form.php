<?php
// (A) PROCESS ORDER FORM
if (isset($_POST["name"])) {
  require "process.php"; 
  echo $result == "" 
    ? "<script>alert('Thank You! We have received your order');</script>"
    : "<div class='notify'>$result</div>" ;
}

?>
 
<!-- (B) ORDER FORM -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
include ("navigation.html");
?>
</head>
<style>
#box{
  float: right;
  height: auto;
  width: 100px 700px;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
  border-radius: 20px;
  padding: 60px;
  opacity: 80%;
 }
img{
    float: left;
	
    padding: 5px;
    width: 700px;
    height: 600px;
    margin-left: 70px;
    margin-top: 10px;
}
#button{
            background-color: orange;
			border-radius: 15px;
            width: 15;
			
        }
</style>
<body>
<img src="menu.jpg" alt="Menu"></div>
<div id="box">
<form id="orderform" method="post" target="_self">
  <label for="name">Name:</label>
  <input type="text" name="name" required placeholder="Full Name"/>

  <label for="address">Address:</label>
  <input type="text" name="address" required placeholder="Complete Address"/> <br>

  <label for="email">Email:</label>
  <input type="email" name="email" required placeholder="Email Address"/> <br>
  
  <label for="phonenumber">Phone Number:</label>
  <input type="tel" name="phonenumber" required placeholder="Phone Number"/> <br>

  <label for="orders">Bilao Orders:</label>
  <input type="text" name="orders" required placeholder="Specify Your Order" size="50"/> <br>
  <label type="text" name="Complete Address">Payment: "Pay as you order"</label><br>
  <div><img src="gcashQRcode.png" alt="gcashQRcode" style="width:200px;height:300px; margin: auto;" id="gcash"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
  <input type="submit" value="Place Order" id="button"/>
</form>
</div>

</body>
</html>











