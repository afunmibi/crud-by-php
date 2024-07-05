<?php
require 'functions.php';
if(isset($_POST['update_details'])){
    $id =  htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']); 
    $phone = htmlspecialchars($_POST['phone']); 
    $email = htmlspecialchars($_POST['email']); 
    $staffcode = htmlspecialchars($_POST['staffcode']); 
    $course = htmlspecialchars($_POST['course']); 
    
    $sql = "update  users_db set name='$name', phone='$phone', email='$email',staffcode='$staffcode',course='$course' WHERE id='$id' "; 

     $result = mysqli_query($con, $sql);

if($result){
// echo "updated successfully";  
header("Location: display.php"); 
}else{
    echo 'not updated';
}

}



 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Form </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class='container'>

        <?php
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

                ?>
<div> 
    <Form action='update_details.php' method='post' >
    <div>
        <input type="hidden" name="id" value="<?=$person['id'];?>">
    </div>

    <label>Name</label>
<input type='text' name='name' id='name' value="<?=$person['name'];?>" placeholder='Full Name here.......' >
</div>
<div> 
    <label>Phone</label>
<input type='text' name='phone' value="<?=$person['phone'];?>" id='phone' placeholder='Phone number here.......'>
</div> 
<div> 
    <label>Email</label>
<input type='text' name='email' value="<?=$person['email'];?>" id='email' placeholder='Email address here.......'>
</div> 
<div> 
    <label>Staff Code</label>
<input type='text' name='staffcode' value="<?=$person['staffcode'];?>" id='staffcode' placeholder='Staff Code here.......'>
</div> 
<div> 
    <label>Course</label>
<input type='text' name='course' value="<?=$person['course'];?>" id='course' placeholder='Course here.......'>
</div> 
<input type='submit' name='update_details' value='Edit Details'>

</form>
</div>

                <?php 
                
            }else{
echo "<h4>No such record found</h4>";

            }


            ;

        }
         ?>
        




</body>
</html>