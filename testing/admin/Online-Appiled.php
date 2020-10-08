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
	<title>Welcome to online applied query</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  style="background:#cce6ff;">
	<div class="container-fluid"  style="background: lightgrey; height: auto;">
		<?php include 'includes/login_set.php'; ?>
		
	</div>
	<div class="container-fluid">
		<div class="col-sm-3 warpper">
			<?php include 'includes/left.php';?>
		</div>
		<div class="col-sm-9">
		<h3> View All Online Applied Candidates  </h3>
			<hr>
			<table class="table table-striped">
				<thead>
					<th> SI# </th>
					<th> Name </th>
					<th> Contact </th>
					<th> Email </th>
					<th> District</th>
					<th> Message </th>
					<th> Action </th>
				</thead>
				<tbody>
					<?php 
					$a=1;
					$select="select * from online_applied";
					$run=mysqli_query($conn,$select);
					while($en=mysqli_fetch_array($run)){?>
					<tr> 
						<td> <?php echo $a;?> </td>
						<td> <?php echo $en['Name'];?> </td>
						<td><?php echo $en['Mobile'];?> </td>
						<td> <?php echo $en['Email'];?> </td>
						<td> <?php echo $en['District'];?> </td>
						<td> <?php echo $en['Message'];?> </td>
						<td><a href="delete3.php?id=<?php echo $en['uid']; ?>" class="btn btn-danger btn-sm"> DELETE </a> |</td>
					</tr>
					<?php  $a++; } ?>
				</tbody>
			</table>
		</div>
	</div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</body>
</html>