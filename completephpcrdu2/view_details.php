<?php 
require 'functions.php';
// print_r($_GET['id']);

        if(isset($_GET['id'])){
            // echo $id_details = $_GET['id']; 
             $id_details = $_GET['id']; 
            $sql = "select * from users_db where id = '$id_details' ";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result)>0){
                $person = mysqli_fetch_assoc($result);
                // print_r($person);
                // echo $person['id'];  
}}
                ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          background-color: gray;  
        }
.card{
    
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    max-width: 600px;
    margin: 50px auto;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 10px 10px 7px;
    margin-bottom: 10px;
}
td{
    padding-right:20px;
    margin-right: 10px;
}

    </style>
</head>
<body>
    <div class="card">
        <div class="card_header">
            <h1>Company's Name</h1>
            <p>Staff Details here</p>
        </div>
        <div class="card_body">
            <table>
                <tr>
                    <th>Name:</th>
                    <td><?=$person['name'];?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?=$person['phone'];?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?=$person['email'];?></td>
                </tr>
                <tr>
                    <th>Staff Code:</th>
                    <td><?=$person['staffcode'];?></td>
                </tr>
                <tr>
                    <th>Course:</th>
                    <td><?=$person['course'];?></td>
                </tr>
            </table>
        </div>
        <div class="card_footer">
            <p>Thank you for patronizing us</p>
        </div>
        <a href="display.php"> <button type="button">Close</button></a>
    </div>
</body>
</html>