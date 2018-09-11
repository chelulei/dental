
<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'connect.php';
if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $result = "SELECT * FROM staff WHERE id ='$id'";
    $select=mysqli_query($con,$result);
    $row=mysqli_fetch_array($select);
    $staff_no=mysqli_escape_string($con,$row['staff_no']);
    $last_name=mysqli_escape_string($con,$row['last_name']);
    $first_name=mysqli_escape_string($con,$row['first_name']);
    $middle_name=mysqli_escape_string($con,$row['middle_name']);
    $department=mysqli_escape_string($con,$row['department']);
    $bday=mysqli_escape_string($con,$row['bday']);
    $age=mysqli_escape_string($con,$row['age']);
    $gender=mysqli_escape_string($con,$row['gender']);
    $contact_number=mysqli_escape_string($con,$row['contact_no']);

}
?>

<div class="container">
    <div class="card mt-3">
        <h5 class="card-header text-center">Edit Employee Registration Form</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="update_staff.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <div class="row">
                            <!-- /.row -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Staff Number</label>
                                    <input type="number" name="staff_no"  VALUE="<?php echo $staff_no;?>" class="form-control" placeholder="Staff Number"
                                           required>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">LastName</label>
                                    <input type="text" name="last_name" VALUE="<?php echo $last_name;?>" class="form-control" placeholder="LastName" required>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">FirstName</label>
                                    <input type="text" name="first_name" VALUE="<?php echo $first_name;?>" class="form-control" placeholder="FirstName" required>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">MiddleName</label>
                                    <input type="text" name="middle_name" VALUE="<?php echo $middle_name;?>" class="form-control" placeholder="MiddleName" required>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department</label>
                                    <input type="text" name="department" VALUE="<?php echo $department;?>" class="form-control" placeholder="Department" required>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender"  class="form-control"  required="">
                                        <?php if ( $gender == "Female") : ?>
                                            <option value='Female' selected>Female
                                            </option>
                                        <?php else: ?>
                                            <option value='Female'>Female</option>
                                        <?php endif; ?>
                                        <?php if ( $gender == "Male"): ?>
                                            <option value='Male' selected> Male
                                            </option>
                                        <?php else: ?>
                                            <option value='Male'>Male</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birthday</label>
                                    <input type="text" name="bday" class="form-control" VALUE="<?php echo $bday;?>" id="datepicker" placeholder="BirthDay"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Number</label>
                                    <input type="text" name="contact_no" class="form-control" VALUE="<?php echo $contact_number;?>" id="exampleInputEmail1"
                                           placeholder="Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="update"  class="btn btn-primary btn-block"><i class="fa fa-save"></i> SAVE</button>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->
                    </form>
                </div>
                <!-- /.col-md-12 -->
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<?php
include 'includes/footer.php';
?>
