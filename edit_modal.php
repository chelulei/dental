<!--Edit schedules-->
<!-- Edit Modal -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="form-validate form-horizontal" method="POST" action="update_schedule.php">
                        <input type="text" name="id" id="sch_id">

                        <div class="form-group row ui-front">
                            <label for="">Name</label>
                            <select name="student" id="student" class="form-control">
                                <?php
                                $sql="SELECT * FROM students";
                                $runs= mysqli_query($con,$sql);
                                while ($rows= mysqli_fetch_array($runs)) {
                                    ?>
                                    <option value=" <?php echo $rows['id'];?>">
                                        <?php echo $rows['last_name'].' '.$rows['first_name'].' '.$rows['middle_name'];?>
                                    </option>
                                <?php }
                                ?>

                            </select>
                            <!-- /# -->
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                            <!-- <div class="col-sm-10"> -->
                            <input type="date" class="form-control"  id="date"  name="date">
                            <!-- </div> -->
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Notes</label>
                            <!-- <div class="col-sm-10"> -->
                            <textarea name="notes" id="notes" cols="30" rows="5" class="form-control">

                            </textarea>
                            <!-- /# -->
                            <!-- </div> -->
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Cancel</button>
                            <button type="submit" name="update"   class="btn btn-primary"><i class="fa fa-save"></i>Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
