<!--Student Info-->

<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
                   <p class="text-center">
                   <div class="row ml-10 border-primary" id="edit_student">

                   </div>
                   </p>
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

