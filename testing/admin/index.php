


<!DOCTYPE html>
<html>
<head>
	<title>Wlcome to Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		h4{text-align: center; color: red;}
	</style>
</head>
<body  style="background:  #d6e0f5;">
	<div class="jumbotron"></div>
	<div class="container">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" style="background: #ccb3ff; border-radius: 10px;">
			<form method="post">
				<br>
				<div class="form-group">
						<input type="text" name="user" class="form-control" placeholder="Enter User Id" required="">
				</div>
				<div class="form-group">
						<input type="password" name="pwd" class="form-control" placeholder="Password" required="">
				</div>
				<a href="#" style="text-decoration: none; color: black;">Forget Password?</a>
				<br>
				<br>
				<input type="checkbox" name="">Keep me logged In
				<br>
				<br>
				<p style="text-align: center; margin-top: 10px;"><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Login"></p>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	</div>

<?php
if(isset($_POST['submit'])){
	$username=$_POST['user'];
	$pwd=$_POST['pwd'];
	include 'db.php';
	$login="select * from loginform where User_Id='$username' && Password='$pwd'";
	$login_trig=mysqli_query($conn,$login);
    $value=mysqli_num_rows($login_trig);
	if($value>0){
		while($list=mysqli_fetch_array($login_trig)){
			session_start();
			$_SESSION['uname']=$list['Name'];
			header("location:dashboard.php");

		}
	}
	else{
		echo "<h4> Wrong User-Id or Password! Please Try Again</h4>";
	}



}


?>








<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>