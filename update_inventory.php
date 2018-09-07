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



if (isset($_POST['up_date'])) {

    $id=$_POST['id'];
    $item=mysqli_escape_string($con,$_POST['item']);
    $quantity=mysqli_escape_string($con,$_POST['quantity']);
    $description=mysqli_escape_string($con,$_POST['description']);
    $update  = "UPDATE inventory SET  
                item='$item',
                quantity='$quantity',
                description='$description'
                
              WHERE id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){

        header("Location:inventory.php?success=Student  successfully Updated");
        exit();
    }

    else {

        $query = array(
            'error' =>'There was an Error! please try again',
            'edit' => $_POST['id']
        );

        $query = http_build_query($query);
        header("Location:inventory.php?$query");
    }
}
