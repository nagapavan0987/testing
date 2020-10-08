<?php
include 'db.php';
$id6=$_GET['id'];
$d4="delete from district where uid='$id6'";
$r5=mysqli_query($conn,$d4);
if($r5)
{
	header("location:district.php");
}
?>