<?php
include 'connect.php';

if (isset($_POST['save'])) {

    $student=$_POST['student'];
    $tooth=$_POST['tooth'];
    $treatment=$_POST['treat'];
    $status=$_POST['status'];
    $notes=$_POST['notes'];
    $doctor=$_POST['doctor'];
    $age=$_POST['age'];
    $contact_no=$_POST['contact_no'];
    $sql = "INSERT INTO treatment (student_id,tooth,treatment,status,notes, doctor,date) 
VALUES ('$student','$tooth','$treatment','$status','$notes', '$doctor', NOW())";

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:treatment.php?success=Record added successfully ");
    }

    else {
        header("Location:treatment.php?error=There was an Error! please try again!!!");
    }
}
