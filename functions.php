<?php


function getUser()

{

    global $con;

    global $user_name;
    global $user_id;
    global $level;

    $username = $_SESSION['username'];

    $get_user= mysqli_query($con,"SELECT * FROM users WHERE username='$username'");

    $row=mysqli_fetch_array( $get_user);
    $user_id=$row['user_id'];
    $user_name=$row['username'];
    $level=$row['level'];

}

    /*Format the Date*/
function formatDate($date){

    return date("M jS, Y",strtotime($date));

}


