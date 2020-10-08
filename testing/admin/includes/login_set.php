<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"><h5 style="padding-top: 50px; font-size: 20px;">Welcome Mr:</h5> </div>
			<div class="col-sm-2"><h5 style="padding-top: 50px; color: red; font-size: 20px;"><?php
				//session_start();
				echo $_SESSION['uname'];

			?></h5> </div>
			<div class="col-sm-2">
				<a href="signout.php" style="text-decoration: none; color: black;"><p style="font-size: 25px; text-align: center; line-height: 100px;">Sign Out</p></a>
			</div>
		</div>