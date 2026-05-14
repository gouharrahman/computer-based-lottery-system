<?php
$host="localhost";
$user="root";
$password="";
$db="user";
session_start();
$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from login where username='".$username."' AND password='".$password."' ";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
    {
        $_SESSION["username"]=$username;
        header("location:main.html");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;    
        header("location:admin.php");
    }
    else
    {
        echo "username or password incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer_based_lottery_system</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body style="background: grey;">
     <div class="main">
            <div class="nav">
                <div class="logo">
                <a href="main.html">Lucky Draw</a>
                </div>
        </div> 
    <div class="form" style="margin-top: 150px; margin-left: -350px;">
         <form action="#" method="POST">
            <h2>Login Here</h2>
            <label for="email"> <b style="color: white;">Email</b></label>
            <input type="text" name="username" placeholder="Enter your email">

            <label for="password"><b style="color: white;">Password</b></label>
            <input type="password" name="password" placeholder="Enter your password">
            
            <button class="btnn" type="submit" value="Sign up" style="color:black; font-weight:bold;">LOGIN</button>

            <p class="link" style="color: white;">Don't have an account<br>
            <a href="signup.php" >Sign up </a style="color: white;"> here</a></p>
        </form>
</div>
</body> 
</html>   