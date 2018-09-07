
<?php
include 'connect.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container">
    <div class="row mt-5 ml-1">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> ADD SCHEDULE
            </button></div>
        <!-- /.col-md-8 -->
    </div>
    <br>
    <!-- /.row -->
    <?php include 'errors.php';?>
    <div class="card">
        <h5 class="card-header text-center">Schedules List</h5>
        <div class="card-body">
    <div class="row">

        <div class="col-md-12">
            <table class="table table-hover" id="myTable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM `schedules`";
                $run= mysqli_query($con,$query);
                while($row =mysqli_fetch_array($run)):
                    $id=$row['id'];
                    ?>
                    <tr>
                        <td><?php echo $row['student_id'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['notes'];?></td>
                        <td>
                            <div class="btn bt-group">
                                <a href="#mediumModal" class="btn btn-outline-primary edit_sc"  id="<?php echo $id; ?>"   data-toggle="modal" data-target="#mediumModal"><i class=" fa fa-edit"></i> Edit </a>
                                <a href="delete_schedule.php?delete=<?php echo $id;?>" class="btn btn-outline-danger delete_link"><i class="fa fa-trash-o"></i>DETE</a>
                            </div>
                            <!-- /.btn bt-group -->
                         <?php include 'edit_modal.php';?>
                        </td>
                    </tr>
                <?php endwhile;?>
                </tbody>
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
        </div>
    </div>

  </div>
<!--<div class="wrapper h-100"></div>-->
<?php
include 'includes/footer.php';
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" id="form" action="new_schedule.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ui-front">
                                <label for="">Name</label>
                                <select name="student" class="form-control">
                                    <option value="">--SELECT students</option>
                                    <?php
                                    $sql="SELECT * FROM students";
                                    $runs= mysqli_query($con,$sql);
                                    while ($rows= mysqli_fetch_array($runs)) {
                                        ?>
                                      <option value="<?php echo $rows['id'];?>">
                                          <?php echo $rows['last_name'].' '.$rows['first_name'].' '.$rows['middle_name'];?>
                                      </option>
                                   <?php }
                                    ?>

                                </select>
                               <!-- /# -->
                            </div>

                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="date"  name="date"  class="form-control"  placeholder="Date" required>
                            </div>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notes</label>
                                <textarea class="form-control" rows="3" name="notes" required></textarea>
                                <!-- /# -->
                            </div>
                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <!-- /.row -->
            </div>
            <div class="modal-footer">
                <input type="hidden" name="student_id" value="">
                <button  class="btn btn-danger"  type="submit" name="save" data-dismiss="modal"><i class="fa fa-close"></i> CANCEL</button>
                <button type="submit" name="save" id="save" class="btn btn-primary"> <i class="fa fa-save"></i> Save changes</button>
            </div>
        </form
        </div>
    </div>
</div>

