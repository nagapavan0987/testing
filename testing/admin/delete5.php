<?php
include 'db.php';
$id6=$_GET['id'];
$d4="delete from keyword where uid='$id6'";
$r5=mysqli_query($conn,$d4);
if($r5)
{
	header("location:digital.php");
}
?>