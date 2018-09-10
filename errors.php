
<!-- /.row -->
<!--Errors starts -->
<div class="mt-3  text-center">
<?php if(isset($_GET['success'])) : ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php echo htmlentities($_GET['success']); ?>
    </div>
<?php elseif(isset($_GET['error'])) : ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php echo htmlentities($_GET['error']); ?>
    </div>
<?php else: echo ''; endif; ?>
<!-- end errors -->
</div>