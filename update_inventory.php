<?php
include('connect.php');

if(isset($_POST['give'])){

    $item_id=$_POST['item_id'];
    $student_id=$_POST['student'];
    $quantity=$_POST['quantity'];


   $run=mysqli_query($con," UPDATE inventory SET 
                             quantity = quantity - '$quantity'
                              WHERE id='$item_id'
                           ");
if($run)
{
   header("Location:inventory.php?success=Successfully Recorded");

}else{
  header("Location:inventory.php?error=There was an error please try again!!!");

}

    mysqli_query($con, "INSERT INTO 
                      medication(student_id,item_id,quantity,date) 
                      VALUES('$student_id','$item_id','$quantity', NOW())");

}

if(isset($_POST['update'])){

    $item_id=$_POST['item_id'];

    $quantity=$_POST['qty'];

    echo $qry=mysqli_query($con," UPDATE inventory SET 
                             quantity = quantity+'$quantity'
                              WHERE id='$item_id'
                           ");
    if($qry)
    {
        header("Location:inventory.php?success=Successfully Updated");

    }else{
          header("Location:inventory.php?error=There was an error please try again!!!");

    }

}