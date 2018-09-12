<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Norsu</title>
    <link href="images/log.png" rel="icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <style>
        body{
            background-image: url("images/bg.png");
        }
    </style>
</head>
<body id="login">
<nav class="navbar navbar-dark bg-primary fixed-top">
<header class="p-4"></header>
</nav>
    <div class="container">
       <div class="row">
           <img src="images/ban.png" class="img-fluid img-polaroid" alt="Responsive image" id="ban">
       </div>
       <!-- /.row -->
        <?php include 'errors.php';?>
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <form  id="login_form" class="form-signin"  action="log_in.php" method="POST">

                        <h3 class="form-signin-heading"><i class="fa fa-lock"></i> Please Login</h3>
                     <div class="form-group">
                         <input type="text" class="form-control"  name="username" placeholder="Username" required>
                     </div>
                     <!-- /.form-group -->
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <!-- /.form-group -->
                        <button class="btn btn-block btn-primary" name="login" type="submit">
                            <i class="fa fa-sign-in"></i> Sign in
                        </button>

                    </form>
                </div>
            </div>
        </div>
<footer>
    <p class="text-center">All Rights Reserved 2018</p>
</footer>
<script>
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
</script>
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>