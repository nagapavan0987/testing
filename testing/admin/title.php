<?php
session_start();
if($_SESSION['uname']=="")
{
	header("location:index.php");
}
include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Title Content</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:#cce6ff;">
	<div class="container-fluid"  style="background: lightgrey; height: auto;">
		<?php include 'includes/login_set.php'; ?>
		
	</div>
	<div class="container-fluid">
		<div class="col-sm-3 warpper">
			<a href="dashboard.php" style="text-decoration: none; color: black;"><p>Dashboard</p></a>
			<a href="enquiry.php" style="text-decoration: none; color: black;"><p>Enquiry</p></a>
			<a href="title.php" style="text-decoration: none; color: black;"><p>Title Content</p></a>
			<a href="about.php" style="text-decoration: none; color: black;"><p>About Us</p></a>
			<a href="Online-Appiled.php" style="text-decoration: none; color: black;"><p>Online Applied</p></a>
			<a href="district.php" style="text-decoration: none; color: black;"><p>District Management</p></a>
			<a href="digital.php" style="text-decoration: none; color: black;"><p>Digital Marketing</p></a>
			<a href="Faculty-Management.php" style="text-decoration: none; color: black;"><p>Faculty Management</p></a>
			<a href="adminregistration.php" style="text-decoration: none; color: black;"><p>New Admin Registration</p></a>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
			<br><br>
			<form method="post" action=action>
				<div class="form-group">
					<p style="font-size: 20px;">Enter Title</p>
					<input type="text" class="form-control" name="title" placeholder="Enter Your Title" required="">
				</div>	
				<p style="text-align: center;"><input type="submit" name="submit" class="btn btn-warning" value="Add Title" onClick="return mass();"></p>	
			</form>
			<script type="text/javascript">
				function mass(){
					alert("Inserted Successfully");
					return true;
				}
			</script>
			<div class="table" style="height: 320px; overflow: scroll;">
			<h3> View Title  </h3>
			<hr>
			<table class="table">
				<thead>
					<th> SI# </th>
					<th> Title Name </th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php 
					$a=1;
					$select="select * from title";
					$run=mysqli_query($conn,$select);
					while($en=mysqli_fetch_array($run)){?>
					<tr> 
						<td> <?php echo $a;?> </td>
						<td> <?php echo $en['Title'];?> </td>
						<td><a href="delete1.php?id=<?php echo $en['uid']; ?>" class="btn btn-danger btn-sm"> DELETE </a> |</td>
					</tr>
					<?php  $a++; } ?>
				</tbody>
			</table>
		</div>
		</div>
		<div class="col-sm-3"></div>
	</div>







<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</body>
</html>



