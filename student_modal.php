<!--Student Info-->

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger text-center" id="mediumModalLabel">
                    Student's Information
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="edit_student.php" method="post">
                <input type="hidden" name="id" id="id">
               <div class="modal-body">
                            <table style="border: none;">
                                <tbody>
                                    <tr>
                                    <td>
                                    <img src="images/default.png" alt="">

                                    </td>
                                    <td width="250px">
                                          <b>Name:</b> <span id="last_name"></span>  <span id="first_name"></span> <span id="middle_name"></span><br>
                                          <b>Admin No:</b> <span id="admno"></span><br>
                                          <b>Birthday:</b><span id="bday"></span><br>
                                          <b>Age:</b> <span id="age"></span><br>
                                          <b>Gender:</b> <span id="gender"></span> <br>
                                        <b>Course:</b> <span id="course"></span> <br>
                                            <b>Contact #:</b> <span id="contact_number"></span> <br>
                                            <b>Contact Person:</b> <span id="contact_person"></span> <br>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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

