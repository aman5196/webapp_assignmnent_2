<?php
session_start();
require("dbconnection.php");
$query= " select * from database_table ";
$result =mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpanelstyle.css">
    <title>Admin panel</title>
</head>
<body>
   <div class="header">
    <h1> WELCOME TO ADMIN PANEL-<?php echo $_SESSION['adminloginid']?></h1>
    <form method="POST">
        <button name="logout"> LOG OUT </button>
    </form>
   </div>
   <div class="tablebody">
       <table class="maintable">
        <tr>
            <td> Name </td>
            <td> Email </td>
            <td> subject </td>
            <td> Message </td>
        </tr>
        <tr>
             <?php
             while($row= mysqli_fetch_assoc($result))
             {
             ?>
             <td> <?php echo $row['name']; ?></td>
             <td> <?php echo $row['email']; ?></td>
             <td> <?php echo $row['subject']; ?></td>
             <td> <?php echo $row['message']; ?></td>
        </tr>
             <?php   
             }
             ?>

        </tr>
        </table>
   </div>
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location:login.php");
}
?>
    
</body>
</html>