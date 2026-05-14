

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer_based_lottery_system</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/payment.css">
    <link rel="stylesheet" type="text/css" href="CSS/admin.css">
</head>
<body>
    
    <div class="main">
            <div class="nav">
                <div class="logo">
                <a href="main.html">Lucky Draw</a>
                </div>
            <div class="menu">
                <ul style="margin-left: 350px;">
                    <li><a href="main.html">HOME</a></li>
                    <li><a href="service.html">SERVICES</a></li>
                    <li><a href="winUser.php">WINNER</a></li>
                    <div class="content" style="top:15px; margin-left:25px;">
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
        </h1>
        <div style="margin-top: -40px;margin-left:600px;">
        <form  method="post" >
        <input type="submit" value="Old Winners" name="oldwinners" class="btn">
         </form>
         </div>

        <table>
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

$getwinners1="select * from winners order by createdAt desc";
$getwinners2="SELECT * FROM `winners2` ORDER BY `no:` DESC";
$getwinners3="SELECT * FROM `winners3` ORDER BY `no` DESC";

?>
        <tr id="header">
            <th>Ticket ID</th>
            <th>Status</th>
            <th>Name</th>
            <th>Price Bond</th>
        </tr>
        <tbody>
        <?php
                
                 if(isset($_POST['oldwinners'])){
                      $resulto1 = mysqli_query( $data,$getwinners1 );
                 while($rowo1 = mysqli_fetch_array($resulto1)) {
                    ?>
                     <tr>
                    <td><?php echo $rowo1['ticket_id'];  ?> </td>
                    <td>Win</td>
                    <td><?php echo $rowo1['name'];  ?> </td>
                     <td><?php echo "50$";  ?> </td>
                </tr>
    
                <?php 
                   }
                   $resulto2 = mysqli_query( $data,$getwinners2 );
                    while($rowo2 = mysqli_fetch_array($resulto2)) {
                    ?>
                     <tr>
                    <td><?php echo $rowo2['ticket_id'];  ?> </td>
                    <td>Win</td>
                    <td><?php echo $rowo2['name'];  ?> </td>
                     <td><?php echo "100$";  ?> </td>
                </tr>
                 <?php 
                   }
                   $resulto3 = mysqli_query( $data,$getwinners3 );
                    while($rowo3 = mysqli_fetch_array($resulto3)) {
                    ?>
                     <tr>
                    <td><?php echo $rowo3['ticket_id'];  ?> </td>
                    <td>Win</td>
                    <td><?php echo $rowo3['name'];  ?> </td>
                     <td><?php echo "200$";  ?> </td>
                </tr>
    
                <?php 
                   }


                 }
                 else{
                             
                          $host="localhost";
                       $user="root";
                         $password="";
                        $db="user";

                      $data=mysqli_connect($host,$user,$password,$db);

                     $getwinnersu1="select * from winners order by createdAt desc";
                     $getwinners2="SELECT * FROM `winners2` ORDER BY `no:` DESC";
                     $getwinners3="SELECT * FROM `winners3` ORDER BY `no` DESC";
                     $resultu1 = mysqli_query( $data,$getwinnersu1);
                     $resultu2 = mysqli_query( $data,$getwinners2 );
                      $resultu3 = mysqli_query( $data,$getwinners3 );
                    $rowu1 = mysqli_fetch_array($resultu1);
                     $rowu2 = mysqli_fetch_array($resultu2);
                      $rowu3 = mysqli_fetch_array($resultu3);
                        ?>
                         <tr>
                        <td><?php echo $rowu1['ticket_id'];  ?> </td>
                        <td>Win</td>
                        <td><?php echo $rowu1['name'];  ?> </td>
                        <td><?php echo "50$";  ?> </td>
                    </tr>
                      <tr>
                        <td><?php echo $rowu2['ticket_id'];  ?> </td>
                        <td>Win</td>
                        <td><?php echo $rowu2['name'];  ?> </td>
                        <td><?php echo "100$";  ?> </td>
                    </tr>
                     <tr>
                        <td><?php echo $rowu3['ticket_id'];  ?> </td>
                        <td>Win</td>
                        <td><?php echo $rowu3['name'];  ?> </td>
                        <td><?php echo "200$";  ?> </td>
                    </tr>
                   
        
                   
        
                    <?php } ?>
        </tbody>
    </table>
</div>
</body>
