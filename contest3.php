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
$sql="select * from ticket_info2  ORDER BY no DESC";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Computer_based_lottery_system</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/admin.css">
</head>
<body>
 <div class="main">
            <div class="nav">
                <div class="logo">
                <a href="admin.php">Lucky Draw</a>
                </div>
            <div class="menu">
                    <div class="content" style="top:15px; margin-left:600px;">
                    <button class="cn"><a href="winAdmin.php">Winner</a></button>

                <button class="cn"><a href="index.php">LOGOUT HERE</a></button>
                </div> 
            </div>
        </div> 
         <h1 class="heading" style="background:grey;">
            <span>C</span>
            <span>O</span>
            <span>N</span>
            <span>T</span>
            <span>E</span>
            <span>S</span>
            <span>T</span>
            <span>-</span>
            <span>3</span>
        </h1>
        <div class="menu">
                <div class="content" style="margin-top: -35px; margin-left:400px;">
                <button class="cn"><a href="admin.php">Contest 1</a></button>
                <button class="cn"><a href="contest2.php">Contest 2</a></button>
                <button class="cn"><a href="contest3.php">Contest 3</a></button>
                </div> 
    <table>
        <tr id="header">
            <th>Ticket ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Quantity</th>
        </tr>
        <?php
         $result = mysqli_query( $data,$sql );
         while($row = mysqli_fetch_array($result)) {
            ?>
             <tr>
            <td><?php echo $row['ticket_id'];  ?> </td>
            <td><?php echo $row['name'];  ?> </td>
            <td><?php echo $row['email'];  ?> </td>
            <td><?php echo $row['quantity'];  ?> </td>
        </tr>
         <?php   
           }
        ?>
    </table>
</div>
</body>
</html>