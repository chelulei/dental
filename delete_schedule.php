
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM schedules WHERE id=".$id);

    if( $query):
        header("Location:schedules.php");
    else:
        header("Location:schedules.php?error=There was an Error please try again!");
    endif;
}?>