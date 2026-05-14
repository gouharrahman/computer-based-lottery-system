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
$getwinners="select * from winners order by createdAt desc";
if(isset($_POST['shuffle-1'])) {
$sql="select * from ticket_info order by RAND() LIMIT 1";
$result = mysqli_query( $data,$sql );
while($row = mysqli_fetch_array($result)) {
    $sql2="Insert into winners (ticket_id,price,quantity,name,email,address,city) values ('".$row["ticket_id"]."','".$row["price"]."','".$row["quantity"]."','".$row["name"]."','".$row["email"]."','".$row["address"]."','".$row["city"]."')";
    mysqli_query($data,$sql2);
    $sql3="truncate table ticket_info";
    mysqli_query( $data,$sql3 );

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
    <link rel="stylesheet" type="text/css" href="CSS/admin.css">
</head>
<body>
    <div class="main">
            <div class="nav">
                <div class="logo">
                <a href="admin.php">Lucky Draw</a>
                </div>
            <div class="menu">
                <ul>
                    <div class="content" style="top:15px; margin-left:100px;">
                    <button class="cn"><a href="winAdmin.php">Contest-1 winner</a></button>
                    <button class="cn"><a href="wincontest2.php">Contest-2 winner</a></button>
                    <button class="cn"><a href="wincontest3.php">Contest-3 winner</a></button>
                    <button class="cn"><a href="admin.php">ENTERIES</a></button>
                <button class="cn"><a href="index.php">LOGOUT HERE</a></button>
                </div>
                </ul>
            </div>
        </div> 
         <h1 class="heading" style="background:grey;">
            <span>W</span>
            <span>I</span>
            <span>N</span>
            <span>N</span>
            <span>E</span>
            <span>R</span>
            <span>-</span>
            <span>1</span>
        </h1>
        
        <div style="margin-top: -40px; margin-left:600px;">
        <form method="post" >
        <input type="submit" value="Shuffle-1" name="shuffle-1" class="btn">
         </form>
         </div>
        <table>
        <tr id="header">
            <th>Ticket ID</th>
            <th>Status</th>
            <th>Name</th>
            <th>Price Bond</th>
        </tr>
        <tbody>
        <?php
                 $result2 = mysqli_query( $data,$getwinners );
                 while($row = mysqli_fetch_array($result2)) {
                    ?>
                     <tr>
                    <td><?php echo $row['ticket_id'];  ?> </td>
                    <td>Win</td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo "50$";?></td>
                </tr>
                <?php }
        ?>
        </tbody>
    </table>
</div>
</body>
