<?php
include 'connect.php';

if (isset($_POST['save'])) {
    $last_name=mysqli_escape_string($con,$_POST['last_name']);
    $first_namer=mysqli_escape_string($con,$_POST['first_name']);
    $middle_name=mysqli_escape_string($con,$_POST['middle_name']);
    $type=mysqli_escape_string($con,$_POST['type']);
    $username= $last_name;
    $password= $last_name;
 $sql = "INSERT INTO users (username,password,type,last_name,first_name, middle_name,image,date) 
VALUES ('$username','$password','$type','$last_name','$first_namer','$middle_name','default.png',NOW())";

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:users.php?success=User successfully added");
    }

    else {
       header("Location:users.php?error=There was an Error Please try Again!");
    }
}
