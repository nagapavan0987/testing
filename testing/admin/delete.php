<?php
$id=$_GET['id'];
include 'db.php';
$del="delete from enquiry where uid='$id'";
$run=mysqli_query($conn,$del);
if($run)
{
	header("location:enquiry.php");
}
?>