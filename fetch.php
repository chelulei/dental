
<?php


include 'connect.php';

if(isset($_POST['sc_id']))
{
$id=$_POST['sc_id'];

$query = mysqli_query($con,"SELECT * FROM schedules WHERE id = '$id'");

$row1 = mysqli_fetch_array($query);

echo json_encode($row1);

}


if(isset($_POST['st_id']))
{
$id=$_POST['st_id'];

$sql = mysqli_query($con,"SELECT * FROM students WHERE id = '$id'");

$row = mysqli_fetch_array($sql);
echo json_encode($row);
}


if(isset($_POST['stf_id']))
{
$id=$_POST['stf_id'];

$cat = mysqli_query($con,"SELECT * FROM staff WHERE id = '$id'");

$rows = mysqli_fetch_array($cat);
echo json_encode($rows);

}


if(isset($_POST['g_id']))
{
$id=$_POST['g_id'];

$grp= mysqli_query($con,"SELECT * FROM inventory WHERE id = '$id'");

$rs = mysqli_fetch_array($grp);
echo json_encode($rs);
}


if(isset($_POST['up_id']))
{
    $item_id=$_POST['up_id'];

    $itm= mysqli_query($con,"SELECT * FROM inventory WHERE id = '$item_id'");

    $r = mysqli_fetch_array($itm);

    echo json_encode($r);

}


if(isset($_POST['sv_id']))
{
    $sv_id=$_POST['sv_id'];

    $trm= mysqli_query($con,"SELECT * FROM treatment WHERE id = '$sv_id'");

    $rm = mysqli_fetch_array($trm);

    echo json_encode($rm);

}

