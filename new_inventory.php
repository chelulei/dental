<?php
include 'connect.php';

if (isset($_POST['save'])) {

    $var_item = mysqli_escape_string($con,$_POST['item']);
    $quantity = mysqli_escape_string($con,$_POST['quantity']);
    $var_description = mysqli_escape_string($con,$_POST['description']);
    echo $SQLQueryAdd = "INSERT INTO inventory(item,quantity,description) 
                                  VALUES('$var_item','$quantity', '$var_description'
		                           )";

    $run = mysqli_query($con, $SQLQueryAdd);

    if ($run) {
        header("Location:inventory.php?success=Item has been added succesfullly");

    } else {

        header("Location:inventory.php?error=There was an Error! Please try again");
    }
}
?>
