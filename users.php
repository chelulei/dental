
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container">
    <div class="row mt-3 ml-1">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usersModal">
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
                            <th>Username</th>
                            <th>Name</th>
                            <th>Type</th>
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

                                <td><?php echo ucfirst($row['username']);?></td>
                                <td><?php echo ucfirst($row['last_name'].' '.$row['first_name'].' '.$row['middle_name']);?></td>
                                <td><?php echo ucfirst($row['level']);?></td>
                                <td>
                                    <!-- /.btn btn-group -->
                                    <button type="button" id="<?php echo $row['user_id'];?>"
                                            class="btn btn-outline-primary ed_user">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i> EDIT</button>
                                    <a href="delete_user.php?delete=<?php echo $row['user_id'];?>" class="btn btn-outline-danger delete_link"><i class="fa fa-trash-o"></i>DETE</a>
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
<div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center d-block " id="usersModalLabel">
                    ADD USER
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form role="form" id="form" action="new_user.php" method="POST">
                            <div class="form-group">
                                <label for="userInputEmail1">LastName</label>
                                <input type="text"  name="last_name"  class="form-control"  placeholder="LastName" required>
                            </div>
                            <div class="form-group">
                                <label for="userInputEmail1">FirstName</label>
                                <input type="text"  name="first_name"  class="form-control"  placeholder="FirstName" required>
                            </div>
                            <div class="form-group">
                                <label for="userInputEmail1">MiddleName</label>
                                <input type="text"  name="middle_name"  class="form-control"  placeholder="MiddleName" required>
                            </div>
                        <div class="form-group">
                        <label for="userInputEmail1">Level</label>
                        <select name="type" class="form-control" id="">
                            <option value="">---Select Level--</option>
                            <option value="2">User</option>
                            <option value="1">Admin</option>
                        </select>
                        <!-- /# -->
                    </div>
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






