
<?php
$result = mysqli_query($con,"SELECT * FROM students WHERE id ='$id'");
$row = mysqli_fetch_array($result);
$userPicture = !empty($row['image'])?$row['image']:'no-image.png';
$userPictureURL = 'images/'.$userPicture;
?>
<div class="user-box">
    <div class="img-relative">
        <!-- Loading image -->
        <div class="overlay uploadProcess" style="display: none;">
            <div class="overlay-content"><img src="images/loading.gif"/></div>
        </div>
        <!-- Hidden upload form -->
        <form method="post" action="upload.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
            <input type="text" name="stud_id"  value="<?php echo $id;?>"/>
            <input type="file" name="picture" id="fileInput"  style="display:none"/>
        </form>
        <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <!-- Image update link -->
        <a class="editLink" href="javascript:void(0);"><img src="images/edit.png"/></a>
        <!-- Profile image -->
            <img src="<?php echo $userPictureURL; ?>" class="img-thumbnail" id="imagePreview">
    </div>
</div>

