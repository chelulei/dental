
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM treatment WHERE id=".$id);

    if( $query):
        header("Location:treatment.php");
    else:
        header("Location:treatment.php?error=There was an Error please try again!");
    endif;
}?>