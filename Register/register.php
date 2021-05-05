<?php include "../Includes/Head.php"; ?>

<style>
	<?php include '../Styles/login.css'; ?>
</style>

<?php require_once '../Database/database.php'; ?>

 <?php include "../Includes/Header_2.php"; ?>

 	<div class="container login-wrapper">
 		<form action="register-inc.php" method="post">
 			
 			<div class="descriere-login">
 				<i class="fas fa-upload"></i>
 				<h2>Register</h2>
				<p>Don't worry we respect your private informations</p>
				 <?php if (isset($_GET['error'])) { ?>
					<p class="error"> <?php echo $_GET['error']; ?></p>
				<?php } ?>
 			</div>
			
			<label class="form-label" for="user">User Name</label>
			<input class="form-control" type="text" name="user"><br>


			<label class="form-label" for="password">Password</label>
			<input class="form-control" type="password" name="password"> <br>

			<label class="form-label" for="confirmPassword">Confirm Password</label>
			<input class="form-control" type="password" name="confirmPassword"> <br>

			<div class="div-btn-login">
				<button class="btn btn-dark" type="submit" name="register">Register</button>
				<span>Already have an account? <a href="../Login/login.php">Login</a></span>
			</div>
			
		</form>
 	</div>
	


<?php include "../Includes/Footer.php"; ?>