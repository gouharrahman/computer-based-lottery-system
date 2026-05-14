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
$getwinners3="select * from winners3 order by createdAt desc";
if(isset($_POST['shuffle-3'])) {
$sql7="select * from ticket_info2 order by RAND() LIMIT 1";
$result5 = mysqli_query( $data,$sql7 );
while($row = mysqli_fetch_array($result5)) {
    $sql8="Insert into winners3 (ticket_id,price,quantity,name,email,address,city) values ('".$row["ticket_id"]."','".$row["price"]."','".$row["quantity"]."','".$row["name"]."','".$row["email"]."','".$row["address"]."','".$row["city"]."')";
    mysqli_query($data,$sql8);
    $sql9="truncate table ticket_info2";
    mysqli_query( $data,$sql9 );

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
            <span>3</span>
        </h1>
        
        <div style="margin-top: -40px;margin-left:600px;">
        <form method="post" >
        <input type="submit" value="Shuffle-3" name="shuffle-3" class="btn">
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
                 $result6 = mysqli_query( $data,$getwinners3 );
                 while($row = mysqli_fetch_array($result6)) {
                    ?>
                     <tr>
                    <td><?php echo $row['ticket_id'];  ?> </td>
                    <td>Win</td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo "200$"?></td>
                </tr>
                <?php }
        ?>
        </tbody>
    </table>
</div>
</body>
