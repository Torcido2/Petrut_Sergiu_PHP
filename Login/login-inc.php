<?php 
session_start();
	include '../Database/database.php';
	if (isset($_POST['user']) && isset($_POST['password'])) {
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


		$user = validate($_POST['user']);
		$password = validate($_POST['password']);

		if (empty($user)) {
			header("Location: login.php?error=Username required!");
			exit();
		}elseif (empty($password)) {
			header("Location: login.php?error=Password required!");
			exit();
		}else{
			$sql = "SELECT * FROM users WHERE user_name='$user' AND password='$password' ";

			$result = mysqli_query($DBconnect, $sql);

			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);
				if ($row['user_name'] === $user && $row['password'] === $password) {
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['id'] = $row['id'];

					header("Location: home.php");
						exit();
				}else {
					header("Location: login.php?error=Incorect Username or Password!");
					exit();
				}
			}else {
				header("Location: login.php?error=Incorect Username or Password!");
				exit();
			}
		}
		
	}else {
		header("Location: login.php?");
		exit();
	}

 ?>