<?php

function getUser()

{

    global $con;
//global $username;
    global $user_id;

    $username = $_SESSION['username'];
    $get_user= mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
    $row=mysqli_fetch_array( $get_user);
    $user_id=$row['id'];

}

/*Format the Date*/
function formatDate($date){

    return date("M jS, Y",strtotime($date));

}