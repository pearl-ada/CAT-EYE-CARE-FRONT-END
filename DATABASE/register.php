<?php

include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, ($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, ($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND
    password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already exist';
    }else{
        if($pass != $cpass){
            $message[] = 'confirm password not matched!';
            
        }else{
            $insert = mysqli_query($conn, "INSERT INTO `user_form` (name, email, password) VALUES 
            ('$name', '$email', '$pass')") or die('query failed');

            header("Location: ../HTML/dashboard.html");

            
        }
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <title>RESGISTER</title>
</head>
<body>
<div class="headers">
        <h1>CAT-EYE CARE</h1>
        <h3>WELCOME</h3>
     </div>
     <form method="post" action="register.php" class="form-container">
        <h1>SIGN IN</h1>
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
        }
    }
    ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="enter username" class="box" required>
        <input type="email" name="email" class="box" placeholder="Enter Email" required>
        <input type="password" name="password" class="box" placeholder="Enter Password" required>
        <input type="password" name="cpassword" placeholder="confirm password" class="box" requred>
       <input type="submit" name="submit" value="SIGN IN" id="submit">
        <p>
    <a href="../DATABASE/login.php">Have an account? Login here</a></p>
</form> 
</form>
    </div>
</body>
</html>