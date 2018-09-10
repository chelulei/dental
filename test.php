<?php



if(isset($_POST['sc_id'])){

    $output = '';

    $sc = "SELECT * FROM schedules
             WHERE 	sch_id = '".$_POST["sc_id"]."'";

    $rs = mysqli_query($con, $sc);

    while( $rm1= mysqli_fetch_array($rs)) {
        $output = '
         <input type="hidden" name="id" id="s_id">
                        <!-- /.row -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Search Student Name</label>
                               <input type="hidden" class="form-control"  value="'.$rm1["sch_id"].'"  name="id">
                                  <select name="student" id="student" class="form-control">
                                  '?>
                                   <?php
                                   $th=mysqli_query($con,"SELECT * FROM students");

                                    while($rs1 =mysqli_fetch_array($th)) : ?>
                                    <?php if($rs1['id'] == $rm1['student_id']){
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    ?>

                                    <?php $output .= "<option value='{$rs1['id']}' {$selected}>
                                                             {$rs1['last_name']} {$rs1['first_name']} {$rs1['middle_name']}
                                                      </option>";

                                                                endwhile;
                                    ?>

                                    <?php  $output .= ' 
                            </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Tooth</label>
                                <input type="text" name="tooth" value="'.$rm["tooth"].'" id="tooth" class="form-control">
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="text" name="treatment" value="'.$rw["date"].'"  id="treatment"  class="form-control">
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Notes</label>
                                         <textarea name="notes" id="" cols="10"  rows="10" class="form-control">
                                        '.strip_tags($rw["notes"]).'
                                          </textarea>
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.form-group -->
                        </div> ';
   }
    echo $output;
}