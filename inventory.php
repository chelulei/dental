<?php
include 'connect.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'functions.php';
?>

<div class="container">
    <br>
    <div class="row">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i>   ADD ITEMS
            </button>
        </div>
        <!-- /.col-md-8 -->

            <?php include 'clock.php';?>
        </div>

    <?php include 'errors.php'; ?>


    <div class="card mt-3">
        <h5 class="card-header text-center">list of Items</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- /.col-mkd-12 -->
                    <table class="table table-bordered" id="myTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                            $query = "SELECT * FROM `inventory`";
                            $run= mysqli_query($con,$query);
                            while($row =mysqli_fetch_array($run)):
                            ?>
                            <td><?php echo $row['item'];?></td>
                            <td><?php echo $row['quantity'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td>

                                <div class="dropdown">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-list" aria-hidden="true"></i> More Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button type="button" id="<?php echo $row['inv_id'];?>" class="dropdown-item btn btn-outline-info edit_p" data-toggle="modal" data-target="#editModal">
                                            <i class="fa fa-pencil-square" aria-hidden="true"></i> Edit Products</button>
                                    <button type="button"  id="<?php echo $row['inv_id'];?>" class="dropdown-item btn btn-outline-success give_med">
                                        <i class="fa fa-thumbs-o-up"></i> Give Medicine</button>
                                        <button type="button" id="<?php echo $row['inv_id'];?>"
                                                class="dropdown-item btn btn-outline-primary ed_qty">
                                            <i class="fa fa-pencil-square" aria-hidden="true"></i> Update Quantity</button>
                                    <button type="button" id="<?php echo $row['inv_id'];?>"
                                            class="dropdown-item btn btn-outline-primary history_med">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Medical History</button>
                                </div>
                                <!-- /.btn btn-group -->
                               <?php include 'inventory_modals.php'?>
                            </td>
                        </tr>
                        <?php endwhile;?>
                        </tbody>
                    </table>
                </div>

                <!-- /.co-md-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>

</div>
<!-- /.container -->
<?php
include 'includes/footer.php';
?>
<!--add modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD ITEMS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="new_inventory.php" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Item</label>
                            <input type="text" name="item" id="" class="form-control">
                            <!-- /# -->
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col-md-12 -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" id="" class="form-control">
                            <!-- /# -->
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col-md-12 -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                            <!-- /# -->
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
                <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- History -->

<div class="modal fade" id="histoModal" tabindex="-1" role="dialog" aria-labelledby="histoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="histoModalLabel">Medical Hostory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="history"></div>
                <!-- /#medical_detail -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>
