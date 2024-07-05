<?php 
require 'functions.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = htmlspecialchars($_POST['username']); 
    $email = htmlspecialchars($_POST['email']); 
    $password = htmlspecialchars($_POST['password']);
    $password = md5($password); 
    $date =date('Y-m-d:H:i:s');

    $sql = "insert into `signup` (username, email, password,  date) values ('$username', '$email', '$password',  '$date')"; 
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: display.php');
        // $data_inserted=  'Data inserted successfully';
    }else{
       $data_not_inserted ='Data failed to be submitted';
       header('Location: signup.php');
    }
}



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
    
    
        <h2>SIGN UP FORM </h2>
    <p>Kindly sign up here to have an account with us</p>
    <br>
    <p>Already have an account? <a href="index.php"><span>Click here</span></a></p>
    </div>
        <form action="" method="post">
            <div class="input-field">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username Here.......">
            </div>
            <div class="input-field">
                <label for="username">Email:</label>
                <input type="email" name="email" placeholder="Email Here.......">
            </div>
            <div class="input-field">
                <label for="username">Password:</label>
                <input type="password" name="password" placeholder="Password Here.......">
            </div>
            <button type=" submit" name="submit" >Sign Up</button>
        </form>

    </div>
</body>

</html>