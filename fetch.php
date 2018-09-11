
<?php
include 'connect.php';

include 'functions.php';

if(isset($_POST['sc_id'])){

    $output = '';

    $sc = "SELECT * FROM schedules
             WHERE 	sch_id = '".$_POST["sc_id"]."'";

    $rs = mysqli_query($con, $sc);

    while( $rm1= mysqli_fetch_array($rs)) {
        $output = '
     <form action="update_schedule.php" method="POST">
       <input type="hidden" name="id" id="sch_id">
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
                                    <label for="">Date</label>
                                    <input type="date" name="date" value="'.$rm1["date"].'"  id="treatment"  class="form-control">
                                    <!-- /# -->
                                </div>
                             
                                    <div class="form-group">
                                        <label for="">Notes</label>
                                         <textarea name="notes" id="" cols="10"  rows="10" class="form-control">
                                        '.strip_tags($rm1["notes"]).'
                                          </textarea>
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                    <P class="text-center">
                         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                     <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                    </P>
                     </form>
                         ';
    }
    echo $output;
}



if(isset($_POST['st_id']))
{
    $output = '';

    $st_id=$_POST['st_id'];

$sql = mysqli_query($con,"SELECT * FROM students WHERE id = '$st_id'");

    while($row = mysqli_fetch_array($sql)) {
        $output = '
       <div class="col-md-4">
            <?php
            ';
             include 'image.php';?>
       </div>
        <?php  $output .= ' 
        <div class="col-md-8">
          <input type="hidden" name="stud_id"  value="'.$row["id"].'"/>
            <b>Name:</b> '.$row["last_name"].' '.$row["first_name"].' '.$row["middle_name"].'<br>
            <b>Admin No:</b>  '.$row["admno"].'<br>
            <b>Birthday:</b>'.$row["bday"].'<br>
            <b>Age:</b> '.$row["bday"].'<br>
            <b>Gender:</b> '.$row["gender"].' <br>
            <b>Course:</b> '.$row["course"].' <br>
            <b>Contact #:</b>  '.$row["contact_number"].'<br>
            <b>Contact Person:</b>'.$row["contact_person"].'<br>
         </div>

';
    }
    echo $output;


}


if(isset($_POST['stf_id']))
{
$sf_id=$_POST['stf_id'];

$cat = mysqli_query($con,"SELECT * FROM staff WHERE id = '$sf_id'");


  while($rows = mysqli_fetch_array($cat)) {
        $output = '
    <table style="border: none; width: 100%;">
        <tbody>
          <tr>
            <td>
           <?php
            '; include 'image-teach.php';?>
           <?php  $output .= ' 
            </td>
            </tr>
            
            <tr>
            <td width="250px">
                <input type="hidden" name="id" value="'.$rows["id"].'">
                <b>Name:</b> '.$rows["last_name"].'  '.$rows["first_name"].' '.$rows["middle_name"].'<br>
                <b>Admin No:</b> '.$rows["staff_no"].'<br>
                <b>Birthday:</b>'.$rows["bday"].'<br>
                <b>Age:</b> '.$rows["age"].'<br>
                <b>Gender:</b>  '.$rows["gender"].'<br>
                <b>Course:</b> '.$rows["department"].'<br>
                    <b>Contact Person:</b>'.$rows["contact_no"].' <br>
            </td>
        </tr>
        </tbody>

';
    }
    echo $output;


}


if(isset($_POST['g_id']))
{
$id=$_POST['g_id'];

$grp= mysqli_query($con,"SELECT * FROM inventory WHERE inv_id = '$id'");

$rs = mysqli_fetch_array($grp);
echo json_encode($rs);
}


if(isset($_POST['up_id']))
{
    $item_id=$_POST['up_id'];

    $itm= mysqli_query($con,"SELECT * FROM inventory WHERE inv_id = '$item_id'");

    $r = mysqli_fetch_array($itm);

    echo json_encode($r);

}


if(isset($_POST['sv_id'])){

    $sv_id=$_POST['sv_id'];

    $output = '';

    $treat= mysqli_query($con,"SELECT * FROM treatment WHERE t_id = '$sv_id'");

    while( $rm= mysqli_fetch_array($treat)) {
        $output = '
         <input type="hidden" name="id" id="sch_id">
                        <!-- /.row -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Search Student Name</label>
                               <input type="hidden" class="form-control"  value="'.$rm["t_id"].'"  name="id">
                                  <select name="student" id="student" class="form-control">
                                  '?>
                                   <?php
                                   $th=mysqli_query($con,"SELECT * FROM students");

                                    while($rsw1 =mysqli_fetch_array($th)) : ?>
                                    <?php if($rsw1['id'] == $rm['student_id']){
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    ?>

                                    <?php $output .= "<option value='{$rsw1['id']}' {$selected}>
                                                             {$rsw1['last_name']} {$rsw1['first_name']} {$rsw1['middle_name']}
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
                                        <label for="">Treatment</label>
                                        <input type="text" name="treatment" value="'.$rm["treatment"].'" id="treatment"  class="form-control">
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" value="'.$rm["status"].'" name="status" id="status" class="form-control">
                                        <!-- /# -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-md-6 -->
                            </div>

                            <div class="form-group">
                                <label for="">Notes</label>
                                <textarea name="notes" id="notes"  rows="5" class="form-control">
                                    '.strip_tags($rm["notes"]).'
                                 </textarea>
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="">Dr. Name</label>
                                <input type="text" name="doctor"  value="'.$rm["doctor"].'"  id="doctor" class="form-control">
                                <!-- /# -->
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                        </div> ';
   }
    echo $output;
}

if(isset($_POST['p_id']))
{
    $p_id=$_POST['p_id'];

    $product= mysqli_query($con,"SELECT * FROM inventory WHERE inv_id = '$p_id'");

    while( $row3= mysqli_fetch_array($product)) {
        $output = '
             <input type="hidden" name="id" id="id" value="'.$row3["inv_id"].'">
                        <!-- /.row -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="item" value="'.$row3["item"].'" class="form-control">
                                <!-- /# -->
                            </div>
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" value="'.$row3["quantity"].'"  class="form-control">
                                        <!-- /# -->
                                    </div>

                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="description"  rows="5" class="form-control">
                                    '.strip_tags($row3["description"]).'
                                 </textarea>
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                  </div> ';
   }
    echo $output;
}


 if(isset($_POST["h_id"]))
 {
      $output = '';

      $histo = "SELECT * FROM medication m JOIN students s ON(m.student_id=s.id)
                       JOIN inventory n ON(m.item_id=n.inv_id)
             WHERE item_id = '".$_POST["h_id"]."'";

      $res = mysqli_query($con, $histo);

      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">
           <thead>
            <tr>
              <th>Item</th>
              <th>Date</th>
              <th>Name</th>
               <th>Quantity</th>
            </tr>
          </thead>
           
           ';

      while($row3 = mysqli_fetch_array($res))
      {
           $output .= '
                 <tr> 
                     <td>'.$row3["item"].'</td>
                     <td>'.formatDate($row3["date"]).'</td>
                     <td>'.$row3["last_name"].' '.$row3["first_name"].' ' .$row3["middle_name"].'</td>
                     <td>'.$row3["qty"].'</td>  
                </tr>
                ';
      }
      $output .= "</table></div>";
      echo $output;
 }

/*hover fetch*/

if(isset($_POST["note_id"]))
{

 $output = '';
 $qery = "SELECT * FROM schedules WHERE sch_id='".$_POST["note_id"]."'";
 $reslt = mysqli_query($con, $qery);

 while($rsw = mysqli_fetch_array($reslt))
 {
  $output = '

  <p style="text-align: justify;">
  '.$rsw['notes'].'
  </p>
  ';
 }
 echo $output;
}


if(isset($_POST["inf_id"]))
{

    $output = '';
    $qry = "SELECT * FROM treatment WHERE t_id='".$_POST["inf_id"]."'";
    $rlt = mysqli_query($con, $qry);

    while($w = mysqli_fetch_array($rlt))
    {
        $output = '
        <p>
        <p><label><b>Treatment</b></label><br/>'.$w['treatment'].'</p>
        <p><label><b>Notes</b></label><br/>'.$w['notes'].'</p>
        </p>

  ';
    }
    echo $output;
}

?>

<script>
    $(document).ready(function () {
        //If image edit link is clicked
        $(".editLink").on('click', function(e){
            e.preventDefault();
            $("#fileInput:hidden").trigger('click');
        });

        //On select file to upload
        $("#fileInput").on('change', function(){
            var image = $('#fileInput').val();
            var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            //validate file type
            if(!img_ex.exec(image)){
                alert('Please upload only .jpg/.jpeg/.png/.gif file.');
                $('#fileInput').val('');
                return false;
            }else{
                $('.uploadProcess').show();
                $('#uploadForm').hide();
                $( "#picUploadForm" ).submit();
            }
        });
    });

    //After completion of image upload process
    function completeUpload(success, fileName) {
        if(success == 1){
            $('#imagePreview').attr("src", "");
            $('#imagePreview').attr("src", fileName);
            $('#fileInput').attr("value", fileName);
            $('.uploadProcess').hide();
        }else{
            $('.uploadProcess').hide();
            alert('There was an error during file upload!');
        }
        return true;
    }

</script>