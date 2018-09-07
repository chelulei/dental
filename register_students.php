<?php include('session.php'); ?>
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container">
        <?php include 'errors.php'; ?>
    <div class="card mt-3">
        <h5 class="card-header text-center">Students' Registration Form</h5>
        <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form action="new_student.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student No</label>
                            <input type="number"    name="admno" class="form-control" id="exampleInputEmail1" placeholder="AdmNo" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Course</label>
                            <input type="text"    name="course" class="form-control" id="exampleInputEmail1" placeholder="Course" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Year Level</label>
                            <select name="year"  class="form-control" required="" required="">
                                <option value="">--Select Year---</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year<">4th Year</option>
                                <option value="5th Year<">5th Year</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">LastName</label>
                            <input type="text"    name="last_name" class="form-control" id="exampleInputEmail1" placeholder="LastName" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">FirstName</label>
                            <input type="text"    name="first_name" class="form-control" id="exampleInputEmail1" placeholder="FirstName" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">MiddleName</label>
                            <input type="text"   name="middle_name"  class="form-control" id="exampleInputEmail1" placeholder="MiddleName" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Birthday</label>
                            <input type="text"    name="bday" class="form-control" id="datepicker" placeholder="BirthDay" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="number"    name="age" class="form-control" placeholder="Age" required>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" required=""
                                    data-size="7" data-live-search="true" class=" form-control selectpicker btn-primary fill_selectbtn_in own_selectbox"
                                    data-title="--Select Gender---" id="state_list" data-width="100%">
                                <option value="" class="hidden"></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="number"   name="contact_number"  class="form-control"  placeholder="Contact Number" required>
                        </div>

                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Contac Person</label>
                            <input type="text"    name="contact_person" class="form-control"  placeholder="Contac Person">
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <button  type="submit" name="save" class="btn btn-primary btn-block" ><i class="fa fa-save"> </i> SAVE</button>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.row -->
                <!-- /.row -->
            </form>
        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.row -->
        </div></div>
</div>
<!-- /.container -->
<?php
include 'includes/footer.php';
?>
