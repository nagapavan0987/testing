<?php 
include 'db.php';
$id2=$_GET['id'];
$de="delete from about where uid='$id2'";
$r1=mysqli_query($conn,$de);
if($r1)
{
	header("location:about.php");
}
?>