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
	<title>Welcome to Admin Registration</title>
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
			<?php include 'includes/left.php';?>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
			<br><br>
			<form method="post" action="action">
				<div class="form-group">
					<p style="font-size: 20px;">Admin Name</p>
					<input type="text" name="user" class="form-control"  placeholder="Enter Admin Name" required="">
				</div>
				<div class="form-group">
					<p style="font-size: 20px;">Admin Email</p>
					<input type="text" name="email" class="form-control"  placeholder="Enter Admin Email" required="">
				</div>
				<div class="form-group">
					<p style="font-size: 20px;">Admin Aadhar Number</p>
					<input type="text" name="aadhar" class="form-control"  placeholder="Enter Admin Aadhar Number" required="">
				</div>
				<div class="form-group">
					<p style="font-size: 20px;">Create Id</p>
					<input type="text" name="user-id" class="form-control"  placeholder="User-Id" required="">
				</div>
				<div class="form-group">
					<p style="font-size: 20px;">Password</p>
					<input type="password" name="pwd" class="form-control"  placeholder="Password" required="">
				</div>
				<p style="text-align: center;"><input type="submit" name="submit3" value="Add Admin" class="btn btn-primary" onClick="return mass();"></p>
			</form>
			<script type="text/javascript">
				function mass(){
					alert("Inserted Successfully");
					return true;
				}
			</script>
			
			
		</div>
		<div class="col-sm-3"></div>
	</div>







<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</body>
</html>