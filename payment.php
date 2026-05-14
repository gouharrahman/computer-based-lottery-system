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
    $quantity=htmlspecialchars($_GET["quantity"]);
    $price=htmlspecialchars($_GET["price"]);
    $name=$_POST["name"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $q=1;
       if($quantity==1){
    $result=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    header('location:service.html');
}

if($quantity==2){
    $result=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result2=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");



    header('location:service.html');
}
if($quantity==3){
    $result=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result2=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result3=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");



    header('location:service.html');
}
if($quantity==4){
    $result=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result2=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result3=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result4=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");



    header('location:service.html');
}
if($quantity==5){
    $result=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result2=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result3=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result4=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");
    $result5=mysqli_query($data,"Insert into ticket_info (ticket_id,price,quantity,name,email,address,city) values ('".rand(1000,900000)."','".$price."','".$q."','".$name."','".$email."','".$address."','".$city."')");



    header('location:service.html');
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/payment.css">
</head>

<body>
<div class="container">
    <form action="#" method="POST">
        <div class="row">
            <div class="col">
                <h3 class="title">Billing address</h3>
                <div class="inputBox">
                    <span>Full name</span>
                    <input type="text" name="name" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>Email</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Address</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>City</span>
                    <input type="text" name="city" placeholder="Swat">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>quntity</span>
                        <input type="button" value="<?php echo $_GET["quantity"];?>" name="state" >
                    </div>
                    <div class="inputBox">
                        <span>price</span>
                     <input type="button"  value="<?php  echo $_GET["price"];?>" name="zipcode">
                    </div>
                </div>
            </div>
        </div>
        <a href="service.html">
         <input type="submit" value="Proceed to checkout" class="submit-btn">
     </a>
        <button class="submit-btn" ><a href="service.html" style="text-decoration: none; color: black; font-weight: bold;">BACK</a></button>
    </form>
</div>    
</body>
</html>