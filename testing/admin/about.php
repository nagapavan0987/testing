<?php  include 'db.php';
session_start();
if($_SESSION['uname']=="")
{
	header("location:index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
		<div class="col-sm-4">
			<br><br>
			<form method="post" action="action">
				<div class="form-group">
					<p style="font-size: 20px;">About Us</p>
					<textarea class="form-control" name="about" placeholder="About Us" required=""></textarea>
				</div>
				<p style="text-align: center;"><input type="submit" name="submit1" class="btn btn-warning" value="Add About" onClick="return mass();"></p>
			</form>
			<script type="text/javascript">
				function mass(){
					alert("Inserted Successfully");
					return true;
				}
			</script>
			<div class="table" style="height: 320px; overflow: scroll;">
			<h3> View About  </h3>
			<hr>
			<table class="table">
				<thead>
					<th> SI# </th>
					<th> About </th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php 
					$a=1;
					$select="select * from about";
					$run=mysqli_query($conn,$select);
					while($en=mysqli_fetch_array($run)){?>
					<tr> 
						<td> <?php echo $a;?> </td>
						<td> <?php echo $en['About'];?> </td>
						<td><a href="delete2.php?id=<?php echo $en['uid']; ?>" class="btn btn-danger btn-sm"> DELETE </a> |</td>
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


