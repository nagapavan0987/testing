<?php
if(isset($_POST['submit'])){
	include 'db.php';
	$uid=uniqid();
	$ab=$_POST['title'];
	$inst="insert into title(uid,Title)  values('$uid','$ab')";
	$tri=mysqli_query($conn,$inst);
	if($tri){
		header("location:title");
		exit;
	}else{
		echo "Something Wrong";
	}
}


?>



<?php
if(isset($_POST['submit1'])){
	include 'db.php';
	$uid=uniqid();
	$ab=$_POST['about'];
	$inst="insert into about(uid,About)  values('$uid','$ab')";
	$tri=mysqli_query($conn,$inst);
	if($tri){
		header("location:about");
		exit;
	}else{
		echo "Something Wrong";
	}
}


?>


<?php

				if(isset($_POST['submit3'])){
					include 'db.php';
	 				$uid=uniqid();
	 				$name=$_POST['user'];
	 				$mail=$_POST['email'];
	 				$adh=$_POST['aadhar'];
	 				$userid=$_POST['user-id'];
	 				$pwd=$_POST['pwd'];
					$insert="insert into loginform(uid,Name,Email,Aadhar,User_Id,Password) values('$uid','$name','$mail','$adh','$userid','$pwd')";
					$trigger=mysqli_query($conn,$insert);
					if($trigger){
						header("location:adminregistration");
						exit;
					}else{
						echo "Something Wrong.....";
					}
				}
?>

<?php
if(isset($_POST['submit2'])){
	include 'db.php';
	$uid=uniqid();
	$ab=$_POST['key'];
	$inst="insert into keyword(uid,Keyword) values('$uid','$ab')";
	$tri=mysqli_query($conn,$inst);
	if($tri){
		header("location:digital");
		exit;
	}else{
		echo "Something Wrong";
	}
}
?>




<?php
if(isset($_POST['submit5'])){
	include 'db.php';
	$uid=uniqid();
	$name=$_POST['dist'];
	$insert="insert into district(uid,dist_name) values('$uid','$name')";
	$trigger=mysqli_query($conn,$insert);
	if($trigger){
			header("location:district");
			exit;
		}else{
			echo "Something Wrong.....";
		}
}
?>



<?php
if(isset($_POST['submit6'])){
	include 'db.php';
	$uid=uniqid();
	$name=$_POST['user'];
	$desg=$_POST['desg'];
	$desc=$_POST['desc'];
	$a=$_FILES['pic']['name'];
	$b=$_FILES['pic']['tmp_name'];
	$target="images/";
	move_uploaded_file($b,$target.$a);
	$inst="insert into faculty(uid,Name,Designation,Description,Images) values('$uid','$name','$desg','$desc','$a')";
	$trigger=mysqli_query($conn,$inst);
	if($trigger){
		header("location:Faculty-Management");
		exit;
	}else{
		echo "Something Wrong";
	}
}
?>