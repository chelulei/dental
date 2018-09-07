<?php
include 'connect.php';

if (isset($_POST['save'])) {
    $student = mysqli_escape_string($con,$_POST['student']);
    $var_date = mysqli_escape_string($con,$_POST['date']);
    $var_notes =mysqli_escape_string($con, $_POST['notes']);

    echo $SQLQueryAdd = "INSERT INTO schedules(student_id,date,notes) 
                                  VALUES('$student','$var_date','$var_notes'
		                           )";

    $run = mysqli_query($con, $SQLQueryAdd);

    if ($run) {
        header("Location:schedules.php?success=Schedule has been added succesfullly");

    } else {

        header("Location:schedules.php?error=There was an Error! Please try again");
    }
}
?>

