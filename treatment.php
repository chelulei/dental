
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container">
    <?php include 'errors.php';?>
    <div class="row mt-3">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> ADD SERVICE
            </button>
        </div>
        <!-- /.col-md-8 -->
            <?php include 'clock.php';?>
    </div>
    <!-- /.row -->
    <br>
<!-- /.row -->
      <div class="row">
          <div class="col-md-12">
          <table class="table table-bordered" id="myTable">
              <thead>
              <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Tooth</th>
<!--                  <th scope="col">Treatment</th>-->
<!--                  <th scope="col">Status</th>-->
<!--                  <th scope="col">Notes</th>-->
                  <th scope="col">Date</th>
                  <th scope="col">By</th>
                  <th scope="col">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>

                  <?php
                  $query = "SELECT * FROM `treatment` t JOIN students s ON(t.student_id=s.id)";
                  $run= mysqli_query($con,$query);
                  while($row =mysqli_fetch_array($run)):
                  $id=$row['t_id'];
                  ?>
                  <td>
                      <label>
                          <a href="#" class="info" id="<?php echo $row["t_id"]; ?>">
                              <?php echo $row['last_name'].' '.$row['first_name'].' '.$row['middle_name'];?></a>
                      </label>

                  </td>
                  <td><?php echo $row['tooth'];?></td>
<!--                  <td>--><?php //echo $row['treatment'];?><!--</td>-->
<!--                  <td>--><?php //echo $row['status'];?><!--</td>-->
<!--                  <td>--><?php //echo $row['notes'];?><!--</td>-->
                  <td><?php echo formatDate($row['date']);?></td>
                  <td><?php echo $row['doctor'];?></td>
                  <td>
                      <div class="btn bt-group">
                          <button type="button" id="<?php echo $row['t_id'];?>"
                                  class="btn btn-outline-primary edit_tr">
                              <i class="fa fa-pencil-square" aria-hidden="true"></i> EDIT</button>
                          <a href="delete_treat.php?delete=<?php echo $row['t_id'];?>" class="btn btn-outline-danger delete_link"><i class="fa fa-trash-o"></i>DETE</a>
                      </div>
                      <!-- /.btn bt-group -->
                      <?php include 'edit_serve.php';?>
                  </td>

              </tr>
              <?php endwhile;?>
              </tbody>
          </table>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php
include 'includes/footer.php';
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Treatment Records</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="new_treat.php" method="post">
            <div class="modal-body">
                 <div class="row">
                     <!-- /.row -->
                     <div class="col-md-12">
                         <div class="form-group">
                             <select name="student" class="form-control">
                                 <option value="">--SELECT STUDENTS----</option>
                                 <?php
                                 $sql="SELECT * FROM students";
                                 $runs= mysqli_query($con,$sql);
                                 while ($rows= mysqli_fetch_array($runs)) {
                                     ?>
                                     <option value="<?php echo $rows['id']?>">
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
                             <input type="text" name="tooth" id="" class="form-control">
                             <!-- /# -->
                         </div>
                         <!-- /.form-group -->
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="">Treatment</label>
                                     <input type="text" name="treatment" id="" class="form-control">
                                     <!-- /# -->
                                 </div>
                                 <!-- /.form-group -->
                             </div>
                             <!-- /.col-md-6 -->
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="">Status</label>
                                     <input type="text" name="status" id="" class="form-control">
                                     <!-- /# -->
                                 </div>
                                 <!-- /.form-group -->
                             </div>
                             <!-- /.col-md-6 -->
                         </div>

                         <div class="form-group">
                             <label for="">Notes</label>
                             <textarea name="notes" id="note"  rows="5" class="form-control"></textarea>
                             <!-- /# -->
                         </div>
                         <!-- /.form-group -->
                         <div class="form-group">
                             <label for="">Dr. Name</label>
                             <input type="text" name="doctor" id="" class="form-control">
                             <!-- /# -->
                             <!-- /# -->
                         </div>
                         <!-- /.form-group -->
                     </div>

                 </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

