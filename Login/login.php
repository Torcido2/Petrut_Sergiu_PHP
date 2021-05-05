<?php include "../Includes/Head.php"; ?>

<style>
	<?php include'../Styles/login.css'; ?>
</style>

 <?php include "../Includes/Header_2.php"; ?>

 	<div class="container login-wrapper">
 		<form action="login-inc.php" method="post">
 			<div class="descriere-login">
 				<i class="far fa-user"></i>
 				<h2>LOGIN</h2>
				<p>Don't worry we respect your private informations</p>
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"> <?php echo $_GET['error']; ?></p>
				<?php } ?> 
 			</div>
			
			<label class="form-label" for="user">User Name</label>
			<input class="form-control" type="text" name="user"><br>

			<label class="form-label" for="password">Password</label>
			<input class="form-control" type="password" name="password"> <br>
			<div class="div-btn-login">
				<button class="btn btn-dark" type="submit">Login</button>
				<span>Or <a href="../Register/register.php">Register</a></span>
			</div>
			
		</form>
 	</div>
	


<?php include "../Includes/Footer.php"; ?>