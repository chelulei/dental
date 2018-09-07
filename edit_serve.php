<!-- Modal -->
<?php

include 'connect.php';

if(isset($_POST['id'])){

    $id=$_POST['id'];}

?>

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit Treatment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_treat.php" method="post">
                <div class="modal-body">


                    <div class="row">
                        <input type="hidden" name="id" id="s_id">
                        <!-- /.row -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Search Student Name</label>
                                <select name="student" class="form-control">
                                    <?php
                                 include 'connect.php';
                                    $sql="SELECT * FROM students";
                                    $runs= mysqli_query($con,$sql);
                                    while ($rows= mysqli_fetch_array($runs)) {
                                        ?>
                                        <option value="<?php echo $rows['id'];?>";?>
                                            <?php echo $rows['last_name'].' '.$rows['first_name'].' '.$rows['middle_name'];?>
                                        </option>
                                    <?php }
                                    ?>

                                </select>
                            </div>
                            <!-- /.form-group -->
                            <hr>
                            <div class="form-group">
                                <label for="">Tooth</label>
                                <input type="text" name="tooth" id="tooth" class="form-control">
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Treatment</label>
                                        <input type="text" name="treatment" id="treatment"  class="form-control">
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" id="status" class="form-control">
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-md-6 -->
                            </div>

                            <div class="form-group">
                                <label for="">Notes</label>
                                <textarea name="notes" id="notes"  rows="5" class="form-control"></textarea>
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Dr. Name</label>
                                <input type="text" name="doctor" id="doctor" class="form-control">
                                <!-- /# -->
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Cancel</button>
                    <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

