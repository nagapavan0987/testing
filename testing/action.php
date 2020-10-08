<?php

if(isset($_POST['submit1'])){
	include 'db.php';
	 $uid=uniqid();
	 $name=$_POST['user'];
	 $email=$_POST['mail'];
	 $contact=$_POST['cont'];
	$insert="insert into enquiry(uid,Name,Email,Mobile) values('$uid','$name','$email','$contact')";
	$trigger=mysqli_query($conn,$insert);
	if($trigger){
			header("location:index");
			exit;
		}else{
			echo "Something Wrong.....";
		}
}
?>


<?php

				if(isset($_POST['on-submit'])){
					include 'db.php';
	 				$uid=uniqid();
	 				$name=$_POST['usern'];
	 				$contact=$_POST['mob'];
	 				$email=$_POST['email'];
	 				$district=$_POST['dist'];
	 				$message=$_POST['mess'];
					$insert="insert into online_applied(uid,Name,Mobile,Email,District,Message) values('$uid','$name','$contact','$email','$district','$message')";
					$trigger=mysqli_query($conn,$insert);
					if($trigger){
						header("location:index");
						exit;
					}else{
						echo "Something Wrong.....";
					}
				}
				?>
			
