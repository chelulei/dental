

<script type="text/javascript">
    var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

    function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}

        if(nmin<=9) nmin="0"+nmin;
        if(nsec<=9) nsec="0"+nsec;

        var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
        document.getElementById('clockbox').innerHTML=clocktext;
    }

    GetClock();
    setInterval(GetClock,1000);
</script>


<!-- Modal -->
<div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="logModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logModalLabel">LOGOUT FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-danger text-center">Are you sure you want to log out?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">NO</button>
                <a href="logout.php"><button type="button" class="btn btn-primary btn-lg">YES</button></a>
            </div>
        </div>
    </div>
</div>

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

     //     /*menu hover*/
         $(".dropdown").hover(
             function() {
                 $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                 $(this).toggleClass('open');
                 $('b', this).toggleClass("caret caret-up");
             },
             function() {
                 $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                 $(this).toggleClass('open');
                 $('b', this).toggleClass("caret caret-up");
             });
         /*menu hover*/

         $('.hover_sc').tooltip({
             title: fetchData,
             html: true,
             placement: 'right'
         });

         function fetchData()
         {
             var fetch_data = '';
             var element = $(this);
             var note_id = element.attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 async: false,
                 data:{note_id:note_id},
                 success:function(data)
                 {
                     fetch_data = data;
                 }
             });
             return fetch_data;
         }


         $('.info').tooltip({
             title: fetchD,
             html: true,
             placement: 'right'
         });

         function fetchD()
         {
             var fetch_d = '';
             var element = $(this);
             var inf_id = element.attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 async: false,
                 data:{inf_id:inf_id},
                 success:function(data)
                 {
                     fetch_d = data;
                 }
             });
             return fetch_d;
         }

         /*End hover*/
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
                 success:function(data){
                     // console.log(data);
                     $('#edit_staff').html(data);
                     $('#staffModal').modal("show");
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
                 success:function(data){
                     $('#edit_student').html(data);
                     $('#studentModal').modal("show");
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
                 success:function(data){
                     $('#edit_product').html(data);
                     $('#editModal').modal("show");
                 }
             });
         });
         /*Edit schedules*/
         $(document).on('click', '.ed_sc', function(){
                 var sc_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{sc_id:sc_id},
                 success:function(data){
                     $('#edit').html(data);
                     $('#mediumModal').modal("show");
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
                 success:function(data){
                      console.log(data);
                     $('#edit_treat').html(data);
                     $('#tModal').modal("show");
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
                 success:function(data){
                     $('#givemed').html(data);
                     $('#giveModal').modal("show");
                 }
             });
         });
         $(document).on('click', '.ed_qty', function(){
             var qty_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"POST",
                 data:{qty_id:qty_id},
                 success:function(data){
                     $('#edit_qty').html(data);
                     $('#qtyModal').modal('show');
                 }
             });
         });

         $('.history_med').click(function(){
             var h_id = $(this).attr("id");
             $.ajax({
                 url:"fetch.php",
                 method:"post",
                 data:{h_id:h_id},
                 success:function(data){
                     $('#history').html(data);
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
