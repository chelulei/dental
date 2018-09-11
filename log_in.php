

<?php

session_start();

include 'connect.php';


if(isset($_POST['login'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    $result = mysqli_query($con, "SELECT*FROM users WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

if ($count > 0) {

    $_SESSION['username'] = $row['username'];
    header('location:home.php');

    }else{

    header('location:login.php?error=Your PassWord or UserName is not Found');

}

}


