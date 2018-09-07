<?php include('session.php'); ?>
<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/header.php';
include 'connect.php';
?>

<div class="container">
    <br>
    <?php include 'errors.php';?>
    <br><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        ADD SERVICE
    </button>

<!-- /.row -->
    <div class="card mt-3">
        <h5 class="card-header text-center">Treatment</h5>
        <div class="card-body">
      <div class="row">
          <div class="col-md-12">
          <table class="table">
              <thead>
              <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Tooth</th>
                  <th scope="col">Treatment</th>
                  <th scope="col">Status</th>
                  <th scope="col">Notes</th>
                  <th scope="col">Date</th>
                  <th scope="col">By</th>
                  <th scope="col">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>

                  <?php
                  $query = "SELECT * FROM `treatment`";
                  $run= mysqli_query($con,$query);
                  while($row =mysqli_fetch_array($run)):
                  $id=$row['id'];
                  ?>
                  <td><?php echo $row['student_id'];?></td>
                  <td><?php echo $row['tooth'];?></td>
                  <td><?php echo $row['treatment'];?></td>
                  <td><?php echo $row['status'];?></td>
                  <td><?php echo $row['notes'];?></td>
                  <td><?php echo $row['date'];?></td>
                  <td><?php echo $row['doctor'];?></td>
                  <td>
                      <div class="btn bt-group">
                          <a href="#mediumModal" class="btn btn-outline-primary edit_tr"  id="<?php echo $id;?>"   data-toggle="modal" data-target="#mediumModal"><i class=" fa fa-edit"></i> Edit </a>
                          <a href="delete_treat.php?delete=<?php echo $row['id'];?>" class="btn btn-outline-danger delete_link"><i class="fa fa-trash-o"></i>DETE</a>
                      </div>
                      <!-- /.btn bt-group -->
                      <?php include 'edit_serve.php';?>
                  </td>

              </tr>
              <?php endwhile;?>
              </tr>
              </tbody>
          </table>
          </div>
          <!-- /.col-md-12 -->
        </div>
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
                                     <input type="text" name="treat" id="" class="form-control">
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

