<!-- Form Login & Check Session -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<?php include_once 'helper/template/include.php'; ?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<?php 
		include_once 'helper/template/header.php'; 

		if(isset($_SESSION['username'])) {
			header("location: ./index.php");
		}
	?>
	
	<!-- If user has logged in, Redirect to index.php -->

	<div class="container text-center login">
    	<div class="container">
	        <div class="card card-container">
	            <img id="profile-img" class="profile-img-card" src="public/image/asset/rovatar.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            <form class="form-signin" method="POST" action="./controller/doLogin.php">
					<input type="text" name="txtUsername" id="inputUsername" class="form-control" placeholder="Username" value=
					"<?php 
						if(isset($_COOKIE['username'])) {
							echo $_COOKIE['username'];
						}
					?>">
					<input type="password" name="txtPassword" id="inputPassword" class="form-control" placeholder="Password" value=
					"<?php 
						if(isset($_COOKIE['password'])) {
							echo $_COOKIE['password'];
						}
					?>">

					<?php 
	                	// session_start();

						if(isset($_POST['Submit'])){
						// code for check server side validation
						if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
						$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
						}else{// Captcha verification is Correct. Final Code Execute here!
						$msg="<span style='color:green'>The Validation code has been matched.</span>";
						}
						}
						?>
						  
						  <!-- <form action="" method="post" name="form1" id="form1" > --->
						  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
						    <?php if(isset($msg)){?>
						    <tr>
						      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
						    </tr>
						    <?php } ?>
						    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
						    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6Lfns8cUAAAAAJZ4mgbV6n48FUdaP-XsCphQak_u"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>

						  </table>
						  </table>
						<!-- </form> --->


	                <input type="checkbox" name="chkRemember" style="margin: 2; margin-bottom: 5%;">Remember Me
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
	            </form>
	            <div class="errorMessage">
	            	<!-- Show Error Message -->
					<p style="color: red;"> 
						<?php
							if(isset($_SESSION['error'])) {
								echo $_SESSION['error'];

								// kalau errornya sudah ditunjukkan
								// jangan tunjukkan lagi
								unset($_SESSION['error']);
							}
						?>
					</p>
	        	</div>
	        </div>
        </div>
	</div>
	
	<?php include_once 'helper/template/footer.php'; ?>
</body>
</html>
