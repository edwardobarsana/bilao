<?php
session_start();

include("connection.php");
include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }else
        {
            echo'<script>alert("Please enter some valid information!")</script>';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>MATES BILAO Signup</title>
    <link rel="icon" href="bilao logo.png" type="image/icon type">
</head>
<body>
    <style type="text/css">
         body {
            background-image: url('loginbg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
         }
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width:100%;

        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: blue;
			border-radius: 15px;
            border: none;
        }

        #box{
			float: right;
			position:relative;
            background-color: rgba(100%, 100%, 100%, 60%);
			backdrop-filter:blur(50px);
			border-radius: 15px;
            margin: 100px 150px;
            width: 300px;
            padding: 50px;
        }
    </style>
    <div id="box" >
        <form method="post">
            <div style="font-size: 20px;margin: 20px; color:black; text-align: center; "><h2>Signup</h2></div>
			<div style="font-size: 20px;margin: 20px; color:black; ">Username</div>
            <input id="text" type="text" name="user_name"><br><br>
			<div style="font-size: 20px;margin: 20px; color:black; ">Password</div>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>
            <p style="color:black; text-align: center;">already have an account?<a href="login.php" style="color:red;  text-decoration: none;"> &nbsp;Login now</a><br><br></p>
        </form>
    </div>
    
</body>
</html>