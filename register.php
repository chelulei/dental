<?php

include 'includes/header.php';
include 'includes/navbar.php';
?>
<!--Main content Starts Here--> 
<div class="container">

<div class="col-md-4"></div>
   <div class="col-md-8">
       <?php include 'errors.php'?>
 <div class="page-header"><h3>Register New Patient</h3></div>
<form action="regconfirm.php" method="POST" class="form-horizontal" role="form" method="POST">
<div class="form-group">
      <label for="name" class="control-label col-sm-2">Name:</label>
        <div class="col-sm-5">
           <input type="text" class="form-control" id="FirstName" 
           name="Name"placeholder="Full Name" required="">
        </div>
    </div>
	<div class="form-group">
      <label for="DOB" class="control-label col-sm-2">Date of Birth:</label>
        <div class="col-sm-5">
           <input type="date" class="form-control" id="DOB" 
           name="DOB"placeholder="Date of Birth" required="">
        </div>
    </div>	
    <div class="form-group">
      <label for="age" class="control-label col-sm-2">Age:</label>
        <div class="col-sm-5">
           <input type="text" class="form-control" id="DOB" 
           name="age"placeholder="Age" required="">
        </div>
    </div>	   
		<div class="form-group">
      <label for="gender" class="control-label col-sm-2" name=>Gender:</label>
        <div class="col-sm-5">
           <select class="form-control" name="gender" required="">
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
           </select>
        </div>
    </div>
   <div class="form-group">
       <label for="number" class="control-label col-sm-2">Address:</label>
        <div class="col-sm-5">
           <input type="text" class="form-control" id="address"  
           name="address" placeholder="address" required="">
        </div>
    </div>
    <div class="form-group">
      <label for="number" class="control-label col-sm-2">ContactNo:</label>
        <div class="col-sm-5">
           <input type="text" class="form-control" id="contactnum"  
           name="contactnum" placeholder="contactnumber" required="">
        </div>
    </div>
    <div class="form-group">
      <label for="email" class="control-label col-sm-2">Email:</label>
        <div class="col-sm-5">
           <input type="text" class="form-control" id="email"  
           name="email" placeholder="Email">
        </div>
    </div>
	<div class="form-group">
      <label for="submit" class="control-label col-sm-2"></label>
        <div class="col-sm-5">
          <input type="submit" class="btn btn-primary btn-block" 
          name="register"  value="Register">
        </div>
    </div>
	</form>
  </div>
 </div>
<?php  include 'includes/footer.php'; ?>









