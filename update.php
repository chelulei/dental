<?php
include('session.php'); 
include 'includes/header.php';
include 'includes/navbar.php';
include 'connect.php';
?>
<div class="container">
 <div class="row">
	 <div class="col-md-4"></div>
	 <div class="col-md-8">				
	<div class="page-header"><h3>Edit Patient Information</h3></div>
	<?php
    if (isset($_GET['id'])) { ?>
      <?php
        $select = "SELECT * FROM records WHERE id='$_GET[id]'";

         $run= mysqli_query($conn,$select);
      
        while ($row=mysqli_fetch_assoc($run)) {
          
     ?>
	 <form class="form-horizontal" method="POST">
		<div class="form-group">
		 <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>">
			<label class="control-label col-sm-2" for="name">Name:</label>
			<div class="col-sm-4">
			<input type="text" name="Name" class="form-control" value="<?php echo $row['Name']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="birthday">Birthdate:</label>
			<div class="col-sm-4">
			<input type="text" name="DOB" class="form-control" value="<?php echo $row['DOB']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="age">Age:</label>
			<div class="col-sm-4">
			<input type="text" name="age" class="form-control" value="<?php echo $row['age']; ?>" >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="">Gender:</label>
			<div class="col-sm-4">
			<select  name="gender" class="form-control">
			<option><?php echo $row['gender']; ?></option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="">Occupation:</label>
			<div class="col-sm-4">
			<input type="text" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="">Address:</label>
			<div class="col-sm-4">
			<input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="">Contact No:</label>
			<div class="col-sm-4"">
			<input type="text" name="contactnum" class="form-control" value="<?php echo $row['contactnum']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="inputPassword">Email:</label>
			<div class="col-sm-4">
			<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" 
			</div>
		</div>
		</div>
		<div class="form-group">
		 <label for="submit" class="control-label col-sm-2"></label>
			<div class="col-sm-4">
			<button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>
    <?php } }
    ?>
	
	<?php
	if (isset($_POST['update'])){
	$name = $_POST['Name'];
	$date = $_POST['DOB'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$occup = $_POST['occupation'];
	$add = $_POST['address'];
	$num = $_POST['contactnum'];
	$email = $_POST['email'];
		
	$sql="update records set Name='$name',DOB='$date', 
	age='$age', gender='$gender', occupation='$occup',
	 address='$add',contactnum='$num',email='$email' where id = '$_GET[id]'";
	if (mysqli_query($con, $sql)) {

  echo "<script> alert('Information has been updated Successfully')</script>";
    echo "<script>window.open('index.php','_self')</script>";

 } 
}

?>
  </div>
 </div>
</div>
