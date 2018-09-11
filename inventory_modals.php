<!--Edit Products-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">EDIT PRODUCTS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_inventory.php" method="post">
                <div class="modal-body">
                    <div id="edit_product">

                    </div>

                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" name="up_date" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--edit quantity-->
<div class="modal fade" id="qtyModal" tabindex="-1" role="dialog" aria-labelledby="qtyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qtyModalLabel">Quantity Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_inventory.php" method="post">
            <div class="modal-body">
                <div id="edit_qty"></div>
                <!-- /#edit_qty -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
                <button type="submit" name="update"   class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- give medics -->
<div class="modal fade" id="giveModal" tabindex="-1" role="dialog" aria-labelledby="giveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="giveModalLabel">Give Medications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_inventory.php" method="POST">
            <div class="modal-body">
             <div id="givemed">

             </div>
             <!-- /#givemed -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Cancel</button>
                <button type="submit"   name="give" class="btn btn-primary"><i class="fa fa-save"></i>Give Medication</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Update Modal -->




