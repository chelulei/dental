<?php
include 'connect.php';

if (isset($_POST['save'])) {

    $admno=mysqli_escape_string($con,$_POST['admno']);
    $course=mysqli_escape_string($con,$_POST['course']);
    $year=mysqli_escape_string($con,$_POST['year']);
    $last_name=mysqli_escape_string($con,$_POST['last_name']);
    $first_namer=mysqli_escape_string($con,$_POST['first_name']);
    $middle_name=mysqli_escape_string($con,$_POST['middle_name']);
    $bday=mysqli_escape_string($con,$_POST['bday']);
    $age=mysqli_escape_string($con,$_POST['age']);
    $gender=mysqli_escape_string($con,$_POST['gender']);
    $contact_number=mysqli_escape_string($con,$_POST['contact_number']);
    $person=mysqli_escape_string($con,$_POST['contact_person']);
 $sql = "INSERT INTO students (admno,course,year,last_name,first_name, middle_name,bday,age,gender, contact_number,contact_person,image,date) 
VALUES ('$admno','$course','$year','$last_name','$first_namer','$middle_name', '$bday','$age','$gender', '$contact_number','$person','default.png', NOW())";

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:students.php?success=Student successfully added");
    }

    else {
       header("Location:register_students.php?error=Error!!!!!");
    }
}
