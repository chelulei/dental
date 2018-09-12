<?php
include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['id'];
    $student_id=mysqli_escape_string($con,$_POST['student']);
    $tooth=mysqli_escape_string($con,$_POST['tooth']);
    $treatment=mysqli_escape_string($con,$_POST['treatment']);
    $status=mysqli_escape_string($con,$_POST['status']);
    $notes=mysqli_escape_string($con,$_POST['notes']);
    $doctor=mysqli_escape_string($con,$_POST['doctor']);
    $update  = "UPDATE treatment SET  student_id='$student_id',
                tooth='$tooth',treatment='$treatment',status='$status',
                notes='$notes',doctor='$doctor'
           WHERE t_id='$id'";
    $run=mysqli_query($con,$update);
    if ($run){

        header("Location:treatment.php?success=Record Updated successfully ");
        exit();
    }

    else {

        $query = array(
            'error' =>'There was an Error! please try again',
        );

        $query = http_build_query($query);
        header("Location:treatment.php?$query");
    }
}
?>