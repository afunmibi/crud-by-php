<?php 
require '../functions.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = htmlspecialchars($_POST['name']); 
    $phone = htmlspecialchars($_POST['phone']); 
    $email = htmlspecialchars($_POST['email']); 
    $staffcode = htmlspecialchars($_POST['staffcode']); 
    $course = htmlspecialchars($_POST['course']); 
    $date =date('Y-m-d:H:i:s');

    $sql = "insert into `users_db` (name, phone, email, staffcode,course, date) values ('$name', '$phone','$email', '$staffcode','$course',  '$date')"; 
    $result = mysqli_query($con, $sql);
    if($result){
        // echo $data_inserted=  'Data inserted successfully';
        header("Location:../display.php");
    }else{
       // echo $data_not_inserted ='Data failed to be submitted';
       header('Location:user_submit_data.php');
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    
    <div class="container">
        <div class="inner-container">
        
        <h2>SUBMIT DETAILS </h2>
    <p>Kindly submit your details to our database</p>
    <br>
    <p>Logout Here <a href="../index.php"><span>Click here</span></a></p>

    </div>
        <form action="" method="post">
            <div class="input-field">
                <label for="username">Full Name</label>
                <input type="text" name="name" placeholder="Full Name Here.......">
            </div>

            <div class="input-field">
                <label for="username">Phone No:</label>
                <input type="text" name="phone" placeholder="Phone Number Here.......">
            </div>
            <div class="input-field">
                <label for="username">Email:</label>
                <input type="email" name="email" placeholder="Email Here.......">
            </div>
            <div class="input-field">
                <label for="username">Staff Code:</label>
                <input type="text" name="staffcode" placeholder="Staff Code Here.......">
            </div>
            <div class="input-field">
                <label for="username">Course:</label>
                <input type="text" name="course" placeholder="Course Here.......">
            </div>

            
            <button type=" submit" name="submit_details" >Submit Details</button>
        </form>

    </div>
</body>

</html>