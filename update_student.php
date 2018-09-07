<?php
include 'connect.php';

if (isset($_POST['update'])) {

    $id=$_POST['id'];
    $admno=mysqli_escape_string($con,$_POST['admno']);
    $course=mysqli_escape_string($con,$_POST['course']);
    $year=mysqli_escape_string($con,$_POST['year']);
    $last_name=mysqli_escape_string($con,$_POST['last_name']);
    $first_name=mysqli_escape_string($con,$_POST['first_name']);
    $middle_name=mysqli_escape_string($con,$_POST['middle_name']);
    $bday=mysqli_escape_string($con,$_POST['bday']);
    $age=mysqli_escape_string($con,$_POST['age']);
    $contact_number=mysqli_escape_string($con,$_POST['contact_number']);
    $contact_person=mysqli_escape_string($con,$_POST['contact_person']);
    $update  = "UPDATE students SET  admno='$admno',course='$course',year='$year',last_name='$last_name',first_name='$first_name',middle_name='$middle_name',bday='$bday',
  age='$age',contact_number='$contact_number', contact_person='$contact_person'
  WHERE id='$id'";
    $run=mysqli_query($con,$update);
    if ($run){

        header("Location:students.php?success=Student  successfully Updated");
        exit();
    }

    else {

        $query = array(
            'error' =>'There was an Error! please try again',
            'edit' => $_POST['id']
        );

        $query = http_build_query($query);
       // header("Location:edit_student.php?$query");
    }
}
?>