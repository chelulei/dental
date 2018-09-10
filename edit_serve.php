<!-- Modal -->
<?php

include 'connect.php';

if(isset($_POST['id'])){

    $id=$_POST['id'];}

?>

<div class="modal fade" id="tModal" tabindex="-1" role="dialog" aria-labelledby="tModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tModalLabel">Edit Treatment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_treat.php" method="post">
                <div class="modal-body">
             <div id="edit_treat"></div>
             <!-- /#edit_treat -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

