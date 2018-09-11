<?php
include 'connect.php';

if (isset($_POST['save'])) {
    $staff_no=mysqli_escape_string($con,$_POST['staff_no']);
    $last_name=mysqli_escape_string($con,$_POST['last_name']);
    $first_name=mysqli_escape_string($con,$_POST['first_name']);
    $middle_name=mysqli_escape_string($con,$_POST['middle_name']);
    $department=mysqli_escape_string($con,$_POST['department']);
    $gender=mysqli_escape_string($con,$_POST['gender']);
    $bday=mysqli_escape_string($con,$_POST['bday']);
    $age=mysqli_escape_string($con,$_POST['age']);
    $contact_no=$_POST['contact_no'];
 $sql = "INSERT INTO staff (staff_no,last_name,first_name,middle_name,department,gender, bday,age,contact_no,date,image) 
VALUES ('$staff_no','$last_name','$first_name','$middle_name','$department','$gender', '$bday','$age','$contact_no',default.png, NOW())";

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:register_students.php?success=Staff successfully added");
    }

    else {
       header("Location:register_students.php?error=There was an Error! please try again!!!");
    }
}
