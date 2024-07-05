<?php 
require 'functions.php';
$sql = "select * from users";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
  foreach ($result as $value) {
    $_SESSION['info']=$value;
    
  }
  }  






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

</head>
<body><link rel="stylesheet" href="assets/css/style.css">
    <div class="table">
    <table>
        <h2>DISPLAY DATA</h2>
<tr>
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE </th>
        <th>EMAIL</th>
        <th>STAFF CODE</th>
        <th>ACTIONS</th>
    </thead>
</tr>
<?php 
// fetch using concatenation
$sql = "select * from users";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
  foreach ($result as $value) {
    $_SESSION['info']=$value;
        echo '<tr>
    
        <td>'.$value['id'].'</td>
        
        <td>'.$value['name'].'</td>
        <td>'.$value['phone'].' </td>
        <td>'.$value['email'].'</td>
        <td>'.$value['staff_code'].'</td>
        <td>'.$value['course'].'</td>
        <td>
            <a href="update_details.php?id=< '.$value['id'].' "><button class="update">Update</button></a>
            <button class="view">View</button>
            <button class="delete">Delete</button>
    </td>
   </tr>'
;
  }
  }  

?>


    </table></div>
</body>
</html>