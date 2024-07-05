<?php 
require 'functions.php';
$sql = "select * from users_db";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
  foreach ($result as $value) {
    // $_SESSION['info']=$value;
  }
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="table">
        <a href="includes/user_submit_data.php"> <button style="float: right; margin-top: 10px; margin-right:20px; color: white;">Add New User</button></a>
    <table>
        <h2>DISPLAY DATA</h2> <span></span>
        
<tr>
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE </th>
        <th>EMAIL</th>
        <th>STAFF CODE</th>
        <th>COURSE</th>
        <th>ACTIONS</th>
    </thead>
</tr>
<?php 

$sql = "select * from users_db";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
  foreach ($result as $value) {
    // $_SESSION['info']=$value;
    //reverse php to incorporate html
        ?>
        <tr>
        <td><?php echo  $value['id'];?></td>
        <td><?php echo  $value['name'];?></td>
        <td><?php echo  $value['phone'];?></td>
        <td><?php echo  $value['email'];?></td>
        <td><?php echo  $value['staffcode'];?></td>
        <td><?php echo  $value['course'];?></td>
        
        <td>
           
            <a href="update2.php?id=<?php echo  $value['id'];?>"><button class="update">Update</button></a>
            <a href="view_details.php?id=<?php echo  $value['id'];?>"><button class="update">View</button></a>
            <a href="delete_details.php?id=<?php echo  $value['id'];?>"><button class="delete" >Delete</button></a>
    </td>
   </tr>
   <?php
;
  }
  }  

?>


    </table>

</div>


</body>
</html>