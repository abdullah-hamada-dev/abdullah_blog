 <?php 
// Start the session
session_start();

if($_SESSION['logged_in']){
    header('Location: index.php'); 
}
require_once('config.php'); 


// If form submitted, insert values into the database.
if (isset($_POST['username']) && isset($_POST['password'])){
	$sql = "SELECT * from users WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
	$result = new_php_db_query($sql);
	if ($result->num_rows > 0) {
	    $_SESSION['logged_in'] = ture;
	     header('Location: dashboard.php'); 
	}

}


require_once("header.php"); 
?>





	<meta name="viewport" content="width=device-width, initial-scale=1">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button  type="submit" class="login100-form-btn" >
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="sign_up.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
						<?php include "footer.php"; ?>
<? }?>