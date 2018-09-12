
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM users WHERE user_id=".$id);

    if( $query):
        header("Location:users.php?success=Deleted Successfully");
    else:
        header("Location:users.php?error=There was an Error please try again!");
    endif;
}?>