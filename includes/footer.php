
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<!--<script src="assets/js/moment.min.js"></script>-->
<!--<script src="assets/js/fullcalendar.min.js"></script>-->
<script src="assets/js/lib/data-table/jquery.dataTables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>

 <script>
     jQuery( document ).ready(function( $ ) {
         /*time*/


         //Remove alert
         window.setTimeout(function() {
             $(".alert").fadeTo(500, 0).slideUp(500, function(){
                 $(this).remove();
             });
         }, 4000);

         //clear URL
         if(typeof window.history.pushState == 'function') {
             window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
         }


         $("#datepicker").datepicker({  showOtherMonths:true});

         $('#myTable').DataTable();


         /*sweet Alert*/
         $('.delete_link').click(function(e){
             e.preventDefault();
             var link = $(this).attr('href');
             swal({
                     title: 'Are you sure?',
                     text: 'You will not be able to recover this data!',
                     type: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Yes, delete it!',
                     cancelButtonText: 'No, cancel!',
                     closeOnConfirm: false,
                     closeOnCancel: false
                 },
                 function(isConfirm) {
                     if (isConfirm) {
                         swal(
                             'Deleted!',
                             'Your data has been deleted.',
                             'success'
                         );
                         window.location=link
                     } else {
                         swal(
                             'Cancelled',
                             'Your data  is safe :)',
                             'error'
                         );
                     }
                 });

         })



         /*show staff info*/
         $(document).on('click', '.staff_info', function(){
             var stf_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{stf_id:stf_id},
                 dataType:"json",
                 success:function(data){
                     // console.log(data);
                     $('#id').val(data.id);
                     $('#staff_no').text(data.staff_no);
                     $('#lastname').text(data.last_name);
                     $('#firstname').text(data.first_name);
                     $('#lastname').text(data.last_name);
                     $('#middlename').text(data.middle_name);
                     $('#department').text(data.department);
                     $('#gender').text(data.gender);
                     $('#bday').text(data.bday);
                     $('#age').text(data.age);
                     $('#contact').text(data.contact_no);
                 }
             });
         });
         /*show student info*/
         $(document).on('click', '.stud_info', function(){
             var st_id = $(this).attr("id");

             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{st_id:st_id},
                 dataType:"json",
                 success:function(data){
                     // console.log(data);
                     $('#id').val(data.id);
                     $('#admno').text(data.admno);
                     $('#course').text(data.course);
                     $('#year').text(data.year);
                     $('#last_name').text(data.last_name);
                     $('#first_name').text(data.first_name);
                     $('#middle_name').text(data.middle_name);
                     $('#bday').text(data.bday);
                     $('#age').text(data.age);
                     $('#gender').text(data.gender);
                     $('#contact_number').text(data.contact_number);
                     $('#contact_person').text(data.contact_person);
                 }
             });
         });
         /*Edit Inventory*/
         $(document).on('click', '.edit_p', function(){
             var p_id = $(this).attr("id");

             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{p_id:p_id},
                 dataType:"json",
                 success:function(data){
                     // console.log(data);
                     $('#id').val(data.id);
                     $('#item').val(data.item);
                     $('#quantity').val(data.quantity);
                     $('#description').text(data.description);
                 }
             });
         });
         /*Edit schedules*/
         $(document).on('click', '.edit_sc', function(){
             var sc_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{sc_id:sc_id},
                 dataType:"json",
                 success:function(data){
                     // console.log(data);
                     $('#sch_id').val(data.id);
                     $('#student').val(data.student_id);
                     $('#date').val(data.date);
                     $('#notes').text(data.notes);
                 }
             });
         });
         /*Edit services*/
         $(document).on('click', '.edit_tr', function(){
             var sv_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{sv_id:sv_id},
                 dataType:"json",
                 success:function(data){
                     // console.log(data);
                     $('#s_id').val(data.id);
                     $('#stude').val(data.student_id);
                     $('#tooth').val(data.tooth);
                     $('#treatment').val(data.treatment);
                     $('#status').val(data.status);
                     $('#notes').text(data.notes);
                     $('#doctor').val(data.doctor)
                 }
             });
         });
        /*inventory*************/
         $(document).on('click', '.give_med', function(){
             var g_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{g_id:g_id},
                 dataType:"json",
                 success:function(data){
                      console.log(data);
                     $('#item_id').val(data.id);
                     $('#item').val(data.item);

                 }
             });
         });
         $(document).on('click', '.up_item', function(){
             var up_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{up_id:up_id},
                 dataType:"json",
                 success:function(data){
                     console.log(data);
                     $('#it_d').val(data.id);
                     $('#itm').val(data.item);
                     $('#qty').val(data.quantity);
                 }
             });
         });
         $(document).on('click', '.med_hst', function(){
             var h_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{h_id:h_id},
                 success:function(data){
                     $('#medical_detail').html(data);
                     $('#histoModal').modal("show");

                 }
             });
         });

         /*inventory*/

         /******************************************/
     });
 </script>
</body>	
</html>
