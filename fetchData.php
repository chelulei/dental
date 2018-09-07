<?php 

if(isset($_POST['search'])){

    include 'connect.php';

    $search = $_POST['search'];

    $query = "SELECT * FROM students WHERE last_name like'%".$search."%'
    
    OR first_name  LIKE '%".$search."%' 
    OR middle_name LIKE '%".$search."%'
    ";
    $result = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_array($result) ){

        $response[] = array("value"=>$row['id'],
        	"label"=>

        	 $row['first_name'].' '.
        	 $row['last_name ']
             
        );
        
    }

    echo json_encode($response);
  
}

exit;

