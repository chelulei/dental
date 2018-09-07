<?php
 include 'includes/header.php';
 include 'includes/navbar.php';
		?>

	<div class="container">
		<?php

        include 'connect.php';
				$var_Name= $_POST['Name'];
				$var_DOB= $_POST['DOB'];
				$var_age= $_POST['age'];
				$var_gender= $_POST['gender'];
				$var_address= $_POST['address'];
				$var_contactnum= $_POST['contactnum'];
				$var_email= $_POST['email'];

      $SQLQueryAdd = "INSERT INTO students (name,dob,age,gender,address,contactnum,email) VALUES('$var_Name','$var_DOB', '$var_age', '$var_gender', '$var_address', '$var_contactnum', '$var_email')";
            $run= mysqli_query($con, $SQLQueryAdd);
				
				if ($run) {

                    header("Location:register.php?success=Student Registered Successfully");

				}else{
                    header("Location:register.php?error=Something when wrong! try again");
                }
		?>
		</div>
	
<?php include 'includes/footer.php'; ?>