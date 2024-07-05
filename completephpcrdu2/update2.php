<?php 
require 'functions.php';

if(isset($_POST['update_details'])){
    $id =htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']); 
    $phone = htmlspecialchars($_POST['phone']); 
    $email = htmlspecialchars($_POST['email']); 
    $staffcode = htmlspecialchars($_POST['staffcode']); 
    $course = htmlspecialchars($_POST['course']); 
    

    $sql = "update users_db set name='$name', phone='$phone', email='$email', staffcode='$staffcode', course='$course' where id = '$id' "; 
    $result = mysqli_query($con, $sql);
    if($result){
        // echo $data_inserted=  'Data inserted successfully';
        header("Location:display.php");
    }else{
       // echo $data_not_inserted ='Data failed to be submitted';
       header('Location:user_submit_data.php');
    }}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <div class="container">
        <div class="inner-container">
        
        <h2>EDIT DETAILS </h2>
    <p>Kindly edit your details to our database</p>
    <br>
    <p>Logout Here <a href="../index.php"><span>Click here</span></a></p>
    </div>
    <?php
    if(isset($_GET['id'])){
        $id_details =htmlspecialchars($_GET['id']);
        $sql = "select * from users_db where id = '$id_details' ";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
        }


    }
        ?>
        <form action="update2.php" method="post">
            <div>
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        </div>
            <div class="input-field">
                <label for="username">Full Name</label>
                <input type="text" name="name" placeholder="Full Name Here......." value="<?php echo $row['name'];?>">
            </div>

            <div class="input-field">
                <label for="username">Phone No:</label>
                <input type="text" name="phone" placeholder="Phone Number Here......." value="<?php echo $row['phone'];?>">
            </div>
            <div class="input-field">
                <label for="username">Email:</label>
                <input type="email" name="email" placeholder="Email Here......." value="<?php echo $row['email'];?>">
            </div>
            <div class="input-field">
                <label for="username">Staff Code:</label>
                <input type="text" name="staffcode" placeholder="Staff Code Here......." value="<?php echo $row['staffcode'];?>">
            </div>
            <div class="input-field">
                <label for="username">Course:</label>
                <input type="text" name="course" placeholder="Course Here......." value="<?php echo $row['course'];?>">
            </div>

            
            <button type=" submit" name="update_details" >Save Details</button>
        </form>

    </div>
</body>

</html>