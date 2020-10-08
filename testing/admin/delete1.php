<?php
include 'db.php';
$id1=$_GET['id'];
$d="delete from title where uid='$id1'";
$r=mysqli_query($conn,$d);
if($r)
{
	header("location:title.php");
}
?>