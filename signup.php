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
    $usertype="user";
    $sql="Insert into login (username,password,usertype) values ('".$username."','".$password."','".$usertype."')";
    mysqli_query($data,$sql);
    header("Location:http://localhost/Graduation_project_II/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body style="background: grey;">
     <div class="main">
            <div class="nav">
                <div class="logo">
                <a href="main.html">Lucky Draw</a>
                </div>
            <div class="menu">     
            </div>
        </div> 
</div>
                <div class="form" style="height: 440px; margin-top: 135px; margin-left: -350px;">
                    <h2>Register Here</h2>
                    <form action="#" method="POST">
                    

                    <label for="email"> <b style="color: white;">Email</b></label>
                    <input type="email" name="username" placeholder="Enter your email">

                    <label for="password"><b style="color: white;">Password</b></label>
                    <input type="password" name="password" placeholder="Enter Password">

                    <button type="submit" class="btnn" style="color:black; font-weight:bold;">Sign up</button>
                    <p class="link" style="color: white;">Already have account<br>
                    <a href="index.php">Sign in </a style="color: white;"> here</a></p>
                </form>
                </div>
</body>
