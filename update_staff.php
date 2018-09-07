<?php
include 'connect.php';

if (isset($_POST['update'])) {
    
    $id=$_POST['id'];
    $staff_no=mysqli_escape_string($con,$_POST['staff_no']);
    $last_name=mysqli_escape_string($con,$_POST['last_name']);
    $first_name=mysqli_escape_string($con,$_POST['first_name']);
    $middle_name=mysqli_escape_string($con,$_POST['middle_name']);
    $department=mysqli_escape_string($con,$_POST['department']);
    $bday=mysqli_escape_string($con,$_POST['bday']);
    $age=mysqli_escape_string($con,$_POST['age']);
    $contact_number=mysqli_escape_string($con,$_POST['contact_no']);
                $update  = "UPDATE staff SET  
                staff_no='$staff_no',
                department='$department',
                last_name='$last_name',
                first_name='$first_name',
                middle_name='$middle_name',
                bday='$bday',
                age='$age',
                contact_no='$contact_number'
               
              WHERE id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){

        header("Location:staff.php?success=Student  successfully Updated");
        exit();
    }

    else {

        $query = array(
            'error' =>'There was an Error! please try again',
            'edit' => $_POST['id']
        );

        $query = http_build_query($query);
        header("Location:edit_staff.php?$query");
    }
}
?>