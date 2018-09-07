<?php include('session.php'); ?>
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container">
    <div class="card mt-3">
        <h5 class="card-header text-center">Staff/ Employee Registration Form</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <form action="new_staff.php" method="post">
                    <div class="row">
                    <!-- /.row -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Staff Number</label>
                            <input type="number" name="staff_no" class="form-control" placeholder="Staff Number"
                                   required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">LastName</label>
                            <input type="text" name="last_name" class="form-control" placeholder="LastName" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">FirstName</label>
                            <input type="text" name="first_name" class="form-control" placeholder="FirstName" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">MiddleName</label>
                        <input type="text" name="middle_name" class="form-control" placeholder="MiddleName" required>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department</label>
                        <input type="text" name="department" class="form-control" placeholder="Department" required>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=gender">Gender</label>
                        <select name="gender" class="form-control" required="" required="">
                            <option value="">--Select Gender---</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
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
                        <input type="text" name="bday" class="form-control" id="datepicker" placeholder="BirthDay"
                               required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Number</label>
                        <input type="text" name="contact_no" class="form-control" id="exampleInputEmail1"
                               placeholder="Contact Number" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-primary btn-block"><i class="fa fa-save"> SAVE</i></button>
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
