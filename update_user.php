<?php
include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['user_id'];

    $last_name=mysqli_escape_string($con,$_POST['last_name']);
    $first_name=mysqli_escape_string($con,$_POST['first_name']);
    $middle_name=mysqli_escape_string($con,$_POST['middle_name']);
    $type=mysqli_escape_string($con,$_POST['role']);
        $username= $last_name;
        $password= $last_name;
   $update  = "UPDATE users SET  username='$username',password='$password',
                     role='$type',
                       last_name='$last_name',first_name='$first_name',
                       middle_name='$middle_name'

                 WHERE user_id='$id'";
             $run=mysqli_query($con,$update);
    if ($run){

        header("Location:users.php?success=User successfully Updated");
        exit();
    }

    else {

        $query = array(
            'error' =>'There was an Error! please try again',
            'edit' => $_POST['id']
        );

        $query = http_build_query($query);
        header("Location:users.php?$query");
    }
}
?>