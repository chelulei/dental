
<?php
include 'connect.php';
include 'functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container">
    <div class="row mt-3 ml-1">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> ADD USERS
            </button>
        </div>
        <!-- /.col-md-4 -->
        <?php include 'clock.php';?>
    </div>
    <br>
    <?php include 'errors.php';?>
    <div class="card">
        <h5 class="card-header text-center">Users List</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" id="myTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM `users`";
                        $run= mysqli_query($con,$query);
                        while($row =mysqli_fetch_array($run)):

                            ?>
                            <tr>

                                <td><?php echo $row['username'];?></td>
                                <td>
                                    <!-- /.btn btn-group -->
                                    <button type="button" id="<?php echo $row['user_id'];?>"
                                            class="btn btn-outline-primary ed_sc">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i> EDIT</button>
                                    <a href="delete_schedule.php?delete=<?php echo $row['user_id'];?>" class="btn btn-outline-danger delete_link"><i class="fa fa-trash-o"></i>DETE</a>
                                    <!-- /.btn bt-group -->

                                </td>
                                <?php include 'edit_modal.php';?>
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
                <h5 class="modal-title text-center d-block " id="exampleModalLabel">
                    ADD SCHEDULE
                </h5>
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
                                <select class="form-control" id="select2-single-box" name="select2-single-box"
                                        data-placeholder="Pick your choice" data-tabindex="1">
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
                                <label for="">Notes</label>
                                <textarea class="form-control" rows="3" name="notes">

                                </textarea>
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
                <button type="submit" name="save" id="save" class="btn btn-primary">
                    <i class="fa fa-save"></i> Save changes
                </button>
            </div>
            </form
        </div>
    </div>
</div>





