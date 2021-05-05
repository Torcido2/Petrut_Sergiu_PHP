<?php include "../Includes/Head.php"; ?>

<style>
	<?php include'../Styles/login.css'; ?>
</style>

 <?php include "../Includes/Header.php"; ?>

 	
 <?php 
 	session_start();
 	if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 		# code...
	?>
	<div class="wrapper-logout">
		<h1>Hello, <?php echo $_SESSION['user_name']; ?> </h1>
		<i class="far fa-user"></i>
		<a href="logout.php">Logout</a>
	</div>
	

 <?php 

}else {
	header("Location: home.php");
	exit();
}

  ?>



<?php include "../Includes/Footer.php"; ?>