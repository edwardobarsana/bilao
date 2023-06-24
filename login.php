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
                //checking if the username is correct
                $query = "select * from users where user_name = '$user_name' limit 1";
                $result = mysqli_query($con, $query);

                //checking if the password is correct
                if($result)
                {
                    if($result && mysqli_num_rows($result)> 0)
                    {
					   $user_data = mysqli_fetch_assoc($result);
                        if ($user_data['password'] === $password)
						{
                            $_SESSION['user_id'] = $user_data ['user_id'];
                            if($user_data["datatype"]=="user")
                            {
                                header("Location: index.php");
                            }
                            elseif($user_data["datatype"]=="admin")
                            {
                                header("Location: dashboard.php");
                            }	
						}
					}
				}
                echo'<script>alert("You have entered incorrect username or password.")</script>';
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
    <title>Mates Bilao Login</title>
    <link rel="icon" href="bilao logo.png" type="image/icon type">
</head>
<body>
    <style type="text/css">
        body {
            background-image: url('loginbg.jpg');
            opacity: 0.9;
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
            background-color: gray;
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
            <div style="font-size: 20px;margin: 20px; color:black; text-align: center; "><h2>Login</h2></div>
            <div style="font-size: 20px;margin: 20px; color:black; ">Username</div>
            <input id="text" type="text" name="user_name"><br><br>
            <div style="font-size: 20px;margin: 20px; color:black; ">Password</div>
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="Login"><br><br>
            <p style="color:black; text-align: center;">don't have an account?<a href="signup.php" style="color:red;  text-decoration: none;">&nbsp;Register now</a><br><br></p>
        </form>
    </div>
    
</body>
</html>