<?php include 'db.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>CaGurukul Patna</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

	<!--<nav>
		<ul>
			<li> <a href="#section1">Home</a></li>
			<li> <a href="#section2">Cources</a></li>
			<li> <a href="#section3">Faculty</a></li>
			<li> <a href="#section4">About Us</a></li>
			<li> <a href="#section5">Contact Us</a></li>
	</nav>-->
	<div class="container-fluid" id="section1" >
		<div class="row top-section">
			
			<div class="col-sm-8">
				<img src="images/logo.png" style="width: 100%; " class="img-responsive">
				<?php
					include 'db.php';
					$sel="select * from title";
					$tri=mysqli_query($conn,$sel);
					while($row=mysqli_fetch_array($tri))
					{?>
						<p style="font-size:20px; color: white;"><span >&#9758;</span> <?php echo $row['Title'];?></p>

					

						<?php } ?>
				
				
			</div>
			<div class="col-sm-4">
				
				<form class="form-section" method="post">
					<p style="color: grey; font-size:20px; text-align: center; "> Apply Online Now ! </p>

					<div class="form-group">
						<input type="text" name="usern" class="form-control" placeholder="student name" required="">
					</div>
					<div class="form-group">
						<input type="text" name="mob" class="form-control" placeholder="student Mobile Number" required="">
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Student E-Mail" required="">
					</div>
					<div class="form-group">
						<select class="form-control" name="dist">
							<option>Select Your District </option>
							<?php
								$dist="select * from district order by dist_name";
								$run=mysqli_query($conn,$dist);
								while($row=mysqli_fetch_array($run)){?>
									<option value="<?php echo $row['dist_name'];?>"><?php echo $row['dist_name'];?></option>
						<?php } ?>
							
						</select>
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Your Message" name="mess" required=""></textarea>
					</div>
					<p> <input type="submit" name="on-submit" class="btn btn-primary form-control" value="SUBMIT">
				</form>
				<?php

				if(isset($_POST['on-submit'])){
	 				$uid=uniqid();
	 				$name=$_POST['usern'];
	 				$contact=$_POST['mob'];
	 				$email=$_POST['email'];
	 				$district=$_POST['dist'];
	 				$message=$_POST['mess'];
					$insert="insert into online_applied(uid,Name,Mobile,Email,District,Message) values('$uid','$name','$contact','$email','$district','$message')";
					$trigger=mysqli_query($conn,$insert);
					if($trigger){
						echo " Added Successfully.....";
					}else{
						echo "Something Wrong.....";
					}
				}
				?>
			</div>
		</div>

	</div>
	<div >
		
	</div>
	<div class="container-fluid" style="background: #d64234; height: 200px; color: white; text-align: center;">
		<div class="row">
			<div class="col-sm-12">
				<i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i><br><br>
				<p>"India's Number one Institute For GST/Income Tex Returrn "</p>

			</div>
		</div>
	</div>
	<div id="section2">
		<div class="container">
				<div class="row">
					
					<div class="col-sm-1"></div>
						<?php 
						include 'db.php';
						$sel2="SELECT * FROM faculty";
						$run1=mysqli_query($conn,$sel2);
						$num=mysqli_num_rows($run1);
						
						while($r=mysqli_fetch_array($run1))
							{?>
							<div class="col-sm-3 course">
							<img class="img-responsive" src="admin/images/<?php echo $r['Images']; ?>" style="width: 100%;">
							<h4 style="text-align: center;"><?php echo $r['Name'];?> </h4>
							<h6 style="text-align: center;"> <?php echo $r['Designation'];?></h6>
						<p style="text-align: justify; padding: 20px;"><b>Disclmair:</b>
							<?php echo $r['Description'];?></p>
							</div>
						<?php } ?>
						<div class="col-sm-1"></div>
	
					
					
				
					
				</div>
		</div>
	</div>
	<div class="clr"></div>
	<div class="container-fluid" style="background: #d64234; height: 200px; color: white; text-align: center; ">
		<div class="row">
			<div class="col-sm-12">
				<p><i class="fa fa-bullhorn fa-5x" aria-hidden="true"></i>
					<h1> 100% job Oriented Course</h1>
</p>
			</div>

		</div>
	</div>
	<div class="container" style=" height: auto; padding: 10px; color: grey; text-align: center; ">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<p>
					<h1> ABOUT US </h1>
					<?php
					include 'db.php';
					$sel="select * from about";
					$tri=mysqli_query($conn,$sel);
					while($row=mysqli_fetch_array($tri))
					{?>
						<p style="font-size:20px; color: black;"><?php echo $row['About'];?></p>

					

					<?php } ?>
				</p>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	<div style="clear: both; margin-top: 20px;"></div>
	<div class="container-fluid" style="background: #d64234; height: auto; color: white; text-align: center;">
		<div class="container">
			<br><br>
			<div class="row">
				<div class="col-sm-4">
					<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i><br>
					CAGURUKUL PATNA CENTRE<BR>
					Nath Utsav Palace , Indira Nagar <br>
					Road No:- 09 , Postel Park 
					Patna :- 800020<br>
					+91-9661775394,www.cagurukul.in<br>
					dkthakurcs89@gmail.com


				</div>
				<div class="col-sm-4">
					<br><br><br>
					<a hef=""><i class="fa fa-facebook-square fa-2x" aria-hidden="true">|</i></a>
					<a hef=""><i class="fa fa-youtube-square fa-2x" aria-hidden="true">|</i></a>
					<a hef=""><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>

				</div>
				<div class="col-sm-4">
					<h4> Enquery Online Now ! </h4>
					<form method="post">
						<div class="form-group">
							<input type="text" name="user" class="form-control" placeholder="Your Name " required="">
						</div>
						<div class="form-group">
							<input type="email" name="mail" class="form-control" placeholder="Your E-Mail " required="">
						</div>
						<div class="form-group">
							<input type="text" name="cont" class="form-control" placeholder="Your Contact number" required="">
						</div>
						<p style="text-align: center;"> <input type="submit" name="submit" class="btn btn-success"></p>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$seo_select="select * from keyword";
				$seo_run=mysqli_query($conn,$seo_select);
				while($seo=mysqli_fetch_array($seo_run))
					{?>
						<div class="col-sm-3" style="color: grey; border:1px solid grey; ">
					<p style="text-align: center; padding-top: 10px;"> <a href="">jfshjfsh fshfjshf </a></p>
				</div>

				<?php } ?>

				
				
			</div>

		</div>
	</div>
	
	
	




<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



<?php

if(isset($_POST['submit'])){
	 $uid=uniqid();
	 $name=$_POST['user'];
	 $email=$_POST['mail'];
	 $contact=$_POST['cont'];
	$insert="insert into enquiry(uid,Name,Email,Mobile) values('$uid','$name','$email','$contact')";
	$trigger=mysqli_query($conn,$insert);
	if($trigger){
			echo " Added Successfully.....";
		}else{
			echo "Something Wrong.....";
		}
}
?>









