<?php
include('connect.php');
include 'includes/header.php';
include 'includes/navbar.php';
if (isset($_POST['update'])) {
    $id=$_POST['id'];

    $result = "SELECT * FROM students WHERE id ='$id'";
    $select=mysqli_query($con,$result);
    $row=mysqli_fetch_array($select);
    //start of loop for displaying products
    $admno=mysqli_escape_string($con,$row['admno']);
    $course=mysqli_escape_string($con,$row['course']);
    $year=mysqli_escape_string($con,$row['year']);
    $last_name=mysqli_escape_string($con,$row['last_name']);
    $first_name=mysqli_escape_string($con,$row['first_name']);
    $middle_name=mysqli_escape_string($con,$row['middle_name']);
    $bday=mysqli_escape_string($con,$row['bday']);
    $age=mysqli_escape_string($con,$row['age']);
    $gender=mysqli_escape_string($con,$row['gender']);
    $contact_number=mysqli_escape_string($con,$row['contact_number']);
    $contact_person=mysqli_escape_string($con,$row['contact_person']);

}
?>


<div class="container">

    <div class="card mt-4">
        <?php include 'errors.php'; ?>
        <strong><h4 class="card-header"> Edit Students' Details</h4></strong>
        <div class="card-body">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-2"></div>
        <!-- /.col-md-2 -->
        <div class="col-md-10">
        <form action="update_staff.php" method="POST">
            <input type="hidden" name="id" value="<?php echo  $id;?>">
            <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Student No</label>
                    <input type="number"    name="admno" value="<?php echo $admno;?>" class="form-control" id="exampleInputEmail1" placeholder="AdmNo" required>
                </div>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Course</label>
                    <input type="text"    name="course" value="<?php echo $course;?>" class="form-control" id="exampleInputEmail1" placeholder="Course" required>
                </div>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Year Level</label>
                    <select name="year"  class="form-control" required="" required="">
                        <?php if ( $year == "1st Yea") : ?>
                            <option value='1st Yea' selected>1st Yea
                            </option>
                        <?php else: ?>
                            <option value='1st Yea'>1st Yea</option>
                        <?php endif; ?>
                        <?php if ( $year == "2nd Year"): ?>
                            <option value='2nd Year' selected> 2nd Year
                            </option>
                        <?php else: ?>
                            <option value='2nd Year'>2nd Year</option>
                        <?php endif; ?>
                        <?php if ( $year == "3rd Year"): ?>
                            <option value='3rd Year' selected> 3rd Yearr
                            </option>
                        <?php else: ?>
                            <option value='3rd Year'>3rd Year</option>
                        <?php endif; ?>
                        <?php if ( $year == "4th Year"): ?>
                            <option value='4th Year' selected> 4th Yearr
                            </option>
                        <?php else: ?>
                            <option value='4th Year'>4th Year</option>
                        <?php endif; ?>
                        <?php if ( $year == "5th Year"): ?>
                            <option value='5th Year' selected> 5th Yearr
                            </option>
                        <?php else: ?>
                            <option value='5th Year'>5th Year</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <!-- /.col-md-3 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">LastName</label>
                <input type="text"    name="last_name" value="<?php echo $last_name;?>" class="form-control" id="exampleInputEmail1" placeholder="LastName" required>
            </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">FirstName</label>
                <input type="text"    name="first_name" value="<?php echo $first_name;?>" class="form-control" id="exampleInputEmail1" placeholder="FirstName" required>
            </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">MiddleName</label>
                <input type="text"   name="middle_name"  value="<?php echo $middle_name;?>" class="form-control" id="exampleInputEmail1" placeholder="MiddleName" required>
            </div>
        </div>
        <!-- /.col-md-3 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Birthday</label>
                <input type="text"    name="bday"  value="<?php echo $bday;?>" class="form-control" id="datepicker" placeholder="BirthDay" required>
            </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="number"    name="age"  value="<?php echo $age ;?>" class="form-control" placeholder="Age" required>
            </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
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
        <!-- /.col-md-3 -->
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Contact Number</label>
                <input type="number"   name="contact_number"  value="<?php echo $contact_number;?>" class="form-control"  placeholder="Contact Number" required>
            </div>

        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Contac Person</label>
                <input type="text"    name="contact_person"  value="<?php echo $contact_person ;?>" class="form-control"  placeholder="Contac Person">
            </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <button type="submit" name="update" class="btn btn-primary btn-block"><i class="fa fa-save"></i>  SAVE</button>
            </div>
        </div>
        <!-- /.col-md-3 -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
    </form>
        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.row -->
        </div>
    </div>
</div>
<!-- /.container -->
<?php
include 'includes/footer.php';
?>
