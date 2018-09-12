<!--Student Info-->
<style>
    .modal-open {
        padding-right: 0px !important;
    }
</style>
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger text-center" id="studentModalLabel">
                    Student's Information
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="edit_student.php" method="post">
                <input type="hidden" name="id" id="id">
               <div class="modal-body">
                   <div class="row">
                       <div class="col-md-3"></div>
                       <!-- /.col-md-4 -->
                       <div class="col-md-8">
                           <div id="edit_student">
                           </div>
                       </div>
                       <!-- /.col-md-4 -->
                       <div class="col-md-1"></div>
                       <!-- /.col-md-4 -->
                   </div>
                   <!-- /.row -->
                 </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" name="update"  class="btn btn-primary"><i class="fa fa-edit"></i> EDIT</button>
            </div>
            </form>
    </div>
</div>
</div>
</div>
<!-- /.row -->

