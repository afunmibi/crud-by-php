<?php
require 'functions.php';
if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Consider using password_hash for more secure hashing
    $hashed_password = md5($password);

    $sql = "SELECT * FROM signup WHERE email = '$email' AND password='$hashed_password' LIMIT 1";
    $result = mysqli_query($con, $sql);

    if (mysqli_fetch_assoc($result)) {
        header('Location: includes/welcome.php');
    } else {
        header('Location: login_failed.php'); // Consider a specific error page
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
            <h2>LOGIN FORM</h2>
            <p>Kindly login here if you have an account with us</p>
            <p>No account yet? <a href="signup.php"><span>Click here</span></a></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <div class="input-field">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email Here.......">
            </div>
            <div class="input-field">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password Here.......">
            </div>
            <button type="submit" name="login">LOGIN</button>
        </form>

    </div>
</body>

</html>
