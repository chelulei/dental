<?php
include('session.php');
include 'connect.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container">
    <br><br>
    <?php include 'errors.php'; ?>
    <br><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     <i class="fa fa-plus"></i>   ADD ITEMS
    </button>
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
                                <div class="btn btn-group">
                                    <button type="button" id="<?php echo $row['id'];?>" class="btn btn-outline-success give_med" data-toggle="modal" data-target="#giveModal">
                                        <i class="fa fa-thumbs-o-up"></i> Give Med</button>
                                    <button type="button" id="<?php echo $row['id'];?>" class="btn btn-outline-primary up_item" data-toggle="modal" data-target="#updateModal">
                                        <i class="fa fa-edit"></i></button>
                                    <button type="button" id="<?php echo $row['id'];?>" class="btn btn-outline-info med_hsto" data-toggle="modal" data-target="#histoModal">
                                        <i class="fa fa-info"></i></button>
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
