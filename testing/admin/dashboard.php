<?php
session_start();
if($_SESSION['uname']=="")
{
	header("location:index.php");
}
else
{
	//header("location:dashboard.php");
}


?>


<!DOCTYPE html>
<html>
<head>

	<title>Welcome to dashboard</title>
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
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<br><br><br><br><br><br><br><br>
			<p style="font-size: 30px; font:sans-serif;">Managed By Aicaas Technology</p>
			<p style="font-size: 20px; text-align: center; font:sans-serif;">Site Developed By Anuj Gupta</p>
			<p style="font-size:20px; text-align: center; font:sans-serif;">Sikkim Manipal Institute Of  Technology</p>
		</div>
		<div class="col-sm-2"></div>
	</div>







<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</body>
</html>