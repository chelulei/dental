<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <a href="register_staff.php"><button type="button" class="btn btn-primary">
                    <i class="fa fa-plus"></i>   ADD STAFF
                </button></a>
        </div>
        <!-- /.col-md-8 -->

        <?php include 'clock.php';?>
    </div>
    <?php include 'errors.php';?>
    <div class="card mt-3">
    <h5 class="card-header text-center">List Of Staff</h5>
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <table class="table table-bordered" id="myTable">
            <thead>
            <tr>
                <th>SNo:</th>
                <th>LastName</th>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $query = "SELECT * FROM `staff`";
            $run= mysqli_query($con,$query);
            while($row =mysqli_fetch_array($run)):
                 $id=$row['id'];
                ?>
                <tr>
                    <td><?php echo $row['staff_no'];?></td>
                    <td><?php echo ucfirst($row['last_name']);?></td>
                    <td><?php echo ucfirst($row['first_name']);?></td>
                    <td><?php echo ucfirst($row['middle_name']);?></td>
                    <td><?php echo $row['department'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td>
                        <button class="btn btn-outline-primary staff_info"  id="<?php echo $id; ?>"
                          >
                            <i class="fa fa-search"></i> VIEW DETAILS </button>
               <?php include 'staff_modal.php'?>
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
?>
