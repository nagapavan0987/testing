<?php
include 'db.php';
$id3=$_GET['id'];
$d1="delete from online_applied where uid='$id3'";
$r2=mysqli_query($conn,$d1);
if($r2)
{
	header("location:Online-Appiled.php");
}
?>