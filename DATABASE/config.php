<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$conn = mysqli_connect ('localhost','root','', 'user_db') or die('connection failed');

// LOGIN USER
if (isset($_POST['login_user'])) 
{
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) 
  {
    array_push($errors, "Username is required");
  }
  if (empty($password)) 
  {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1)
    while($row = $results->fetch_assoc()) 
    {
    session_start();
      $_SESSION['user_id'] =$row['user_id'];
      $_SESSION['username'] = $username;
      
      header('Location: ../HTML/dashboard.html');
    }
    else 
    {
      array_push($errors, "Wrong username/password combination");
    }
  }
}





?>