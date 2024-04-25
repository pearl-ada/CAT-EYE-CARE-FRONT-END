<?php
include 'config.php';

//if(isset($_POST['submit'])){

  //  $name = mysqli_real_escape_string($conn, $_POST['name']);
    //$email = mysqli_real_escape_string($conn, $_POST['email']);
   // $pass =  ($_POST['password']);
    //$cpass = ($_POST['cpassword']);
    //$user_type = $_POST['user_type'];

   //$select = " SELECT * FROM `user_form` WHERE email = '$email' && 
    //password = '$pass' ";

    //$result = mysqli_query($conn, $select);

   //if(mysqli_num_rows($result) > 0)
   //{
    //$row = mysqli_fetch_array($result);

    //if($row ['user_type'] == 'user'){
      //  $_SESSION['user_name'] = $row['name'];
        
   
        //header("Location: ../HTML/dashboard.html");
    //}
    //}else{
      //      $error[] = 'incorrect email or password!';
        //}
    //}
    




?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <div class="headers">
    <h1>CAT-EYE CARE</h1>
    <h3>WELCOME</h3>
 </div>
 <form action="login.php" method="post" class="form-container">
    <div class="form">
        <h1>LOGIN</h1>
       <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<div class="error-msg">'.$error.'</div>';
       }
   }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="email" name="email" class="box" placeholder="Enter Username" required>
        <input type="password" name="Password" class="box" placeholder="Enter Password" required>
        <input type="submit" value="LOGIN" id="submit"> 
      <p>  <a href="../DATABASE/register.php">Don't have an account? Sign in here</a></p>
</form>
</form>
</div>
</body>
</html>