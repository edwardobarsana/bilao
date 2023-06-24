<html>
<head></head>
<style>
body{
    background-color: whitesmoke;
}
table td, table th
{
    border: 1px solid #ddd;
    padding: 8px;
}
table tr:nth-child(even){background-color: #f2f2f2;}
table tr:hover {background-color: #ddd;}
table th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #04AA6D;
    color: white;
}
#div2{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    display: inline;
    width:33.33.%;
    float:right;
    background-color:red;
    padding: 10px;
}
#div1{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    width:33.33%;
    margin: 0 auto;
}
</style>
</head>
<body>
    <div id="div1">  DASHBOARD</div>
    <div id="div2"><a href="logout.php">Logout</a></div>
<?php
$no = 1;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$con = mysqli_connect("localhost","root","");
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
   }
 $sql = "SELECT order_id, dop, name, address, email, phonenumber, orders FROM orders";
 $result = $conn->query($sql);
 $sql = "SELECT order_id, dop, name, address, email, phonenumber, orders FROM orders";
echo "<table style='font-family: Arial, Helvetica, sans-serif;' border-collapse='collapse' width = 'auto' align ='center'>

<tr>
<th>ID</th>
<th>Order Date/Time</th>
<th>Name</th>
<th>Address</th>
<th>Email</th>
<th>Phone Numbers</th>
<th>Orders</th>
</tr>";
while($row = mysqli_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $no . "</td>";
 $no++;
 echo "<td>" . $row['dop'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['phonenumber'] . "</td>";
 echo "<td>" . $row['orders'] . "</td>";
 echo "</tr>";
 }

echo "</table>";
mysqli_close($con);

?>

</body>
</html>