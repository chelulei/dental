<!--Edit Products-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">EDIT ITEMS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_inventory.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id" id="id">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Item</label>
                                <input type="text" name="item" id="item" class="form-control">
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col-md-12 -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" name="up_date" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- give medics -->
<div class="modal fade" id="giveModal" tabindex="-1" role="dialog" aria-labelledby="giveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="giveModalLabel">Give Medications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_inventory.php" method="POST">
            <div class="modal-body">

                <div class="form-group">
                    <select name="student" class="form-control">
                        <option value="">--SELECT STUDENTS----</option>
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
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Item ID</label>
                        <input type="number"  name="item_id" class="form-control" id="item_id" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Name</label>
                        <input type="text" class="form-control" name="item" id="item" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">How many</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Cancel</button>
                <button type="submit"   name="give" class="btn btn-primary"><i class="fa fa-save"></i>Give Medication</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Quantity Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_inventory.php" method="POST">
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Item ID</label>
                        <input type="text"   name="item_id" class="form-control" id="it_d" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Name</label>
                        <input type="text" class="form-control" name="item" id="itm" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Current Quantity</label>
                        <input type="text"  class="form-control"  id="qty" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Add Quantity</label>
                    <input type="number" class="form-control" name="qty" id="quantity" placeholder="quantity">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- History -->
<div class="modal fade" id="histoModal" tabindex="-1" role="dialog" aria-labelledby="histoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="histoModalLabel">Medicine History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="medical_detail">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>