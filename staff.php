<?php
include('session.php');
include 'connect.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container">
    <br>
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
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['middle_name'];?></td>
                    <td><?php echo $row['department'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td>
                        <button class="btn btn-outline-primary staff_info"  id="<?php echo $id; ?>"
                           data-toggle="modal" data-target="#staffModal">
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
