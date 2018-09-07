
<div class="modal fade" id="staffModal" tabindex="-1" role="dialog" aria-labelledby="staffModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="staffModalLabel">
                    Saff's Information
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="edit_staff.php" method="post">
                <input type="hidden" name="id" id="id">
            <div class="modal-body">
                    <table style="border: none;">
                        <tbody>
                        <tr>
                            <td>
                      <img src="images/default.png" alt="">

                            </td>
                            <td width="250px">
                                <b>Name:</b> <span id="lastname"></span>  <span id="firstname"></span> <span id="middlename"></span><br>
                                <b>Admin No:</b> <span id="staff_no"></span><br>
                                <b>Birthday:</b><span id="bday"></span><br>
                                <b>Age:</b> <span id="age"></span><br>
                                <b>Gender:</b> <span id="gender"></span> <br>
                                <b>Course:</b> <span id="department"> <br>
                                    <b>Contact Person:</b> <span id="contact"></span> <br>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i>CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info"><i class="fa fa-pencil"></i> EDIT</button>

            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- /.row -->

