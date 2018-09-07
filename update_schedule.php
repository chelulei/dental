<?php
include('connect.php');

if(isset($_POST['id']))

$id=$_POST['id'];

$name=$_POST['student'];
$date=$_POST['date'];
$notes=$_POST['notes'];

echo $query=mysqli_query($con,"UPDATE schedules SET student_id='$name', date='$date', notes='$notes' WHERE id='$id'");

if( $query):
   header("Location:schedules.php?success=Successfully Updated");
else:
    header("Location:schedules.php?error=There was an error please try again!");
endif;
?>