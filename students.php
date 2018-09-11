<?php
include 'connect.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container">

    <div class="row mt-3">
        <div class="col-md-8">
            <a href="register_students.php"><button type="button" class="btn btn-primary">
                    <i class="fa fa-plus"></i>   ADD STUDENT
                </button></a>
        </div>
        <!-- /.col-md-8 -->

        <?php include 'clock.php';?>
    </div>
    <!-- /.wrapper -->
    <?php include 'errors.php'; ?>
    <div class="card mt-3">
        <h5 class="card-header text-center">List Of Students</h5>
        <div class="card-body">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th>ADM NO</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                    <th>MiddleName</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $query = "SELECT * FROM `students`";
                $run= mysqli_query($con,$query);
                while($row =mysqli_fetch_array($run)):
                    ?>
                        <td><?php echo $row['admno'];?></td>
                        <td><?php echo $row['last_name'];?></td>
                        <td><?php echo $row['first_name'];?></td>
                        <td><?php echo $row['middle_name'];?></td>
                         <td><?php echo $row['course'];?></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary stud_info"  id="<?php echo $row['id'];?>">
                                <i class="fa fa-search"></i> VIEW DETAILS
                            </button>

                        </td>
                       </tr>
                <?php endwhile;?>
                </tbody>
            </table>

        </div>
        <!-- /.col-md-8 -->
    </div>
    <!-- /.row -->
        </div>
    </div>
</div>
<!-- /.container -->
<?php
include 'includes/footer.php';
 include 'student_modal.php'
?>