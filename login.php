<?php
$error ='';
include 'includes/head.php';
include 'connect.php';

if (isset($_POST['login'])) {
session_start();
 $username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($con,$query);
$num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if( $num_row > 0 ) {
      header('location:index.php');
  $_SESSION['id']=$row['id'];

 }else{
        $error = '<div class="alert alert-danger">
 <a href="#" class="close" data-dismiss="alert">&times;</a>
<p class="text-center">Error: username or password is incorrect!</p>

</div>'; }


}

?><nav class="navbar navbar-custom navbar-static-top">
</nav>
    <div class="container">
        <div class="div" style="margin-top: 100px;"></div>
        <!-- /.div -->
        <div class="row">
            <div class="col-md-offset-4 col-md-5">
                <form action="" method="POST">
                <?php echo $error;?>
                <div class="form-login">
                    <h4>Please Login</h4>
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text"  name="username" id="userName" class="form-control  chat-input" placeholder="username" />
                        </div>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                             <span class="input-group-addon">
                                   <i class="glyphicon glyphicon-lock"></i>
                            </span>
                        <input type="password"  name="password" id="userPassword" class="form-control  chat-input" placeholder="password" />
                        </div>
                        </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-primary btn-block">
                            <i class="glyphicon glyphicon-log-in"></i>
                            Login
                        </button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>

<?php
include 'includes/footer.php';
?>