<?php 
	
	$eroare = "";

	if (isset($_POST['register'])) {
		require '../Database/database.php';

		// creearea de variabile cu legatura la form.
		$username = $_POST['user'];
		$R_Password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];

		//verificarea variabilelor sa nu fie goale
	if (empty($username) OR empty($R_Password) OR empty($confirmPassword)) {
		header("Location: register.php?error=Please complete all the fields");
		$eroare = "Please complete all the fields";
		exit();

		//validarea variabilei username
	} elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
		header("Location: register.php?error=Invalid characters");
		$eroare = "Invalid Username format";
		exit();

		//verificarea lungimii parolei (mai mult de 6)
	} elseif (strlen($R_Password) < 6) {
		header("Location: register.php?error=Password to short");
		$eroare = "Password to short";
		exit();

		//verificarea parolelor sa fie identice
	} elseif ($R_Password !== $confirmPassword ) {
		header("Location: register.php?error=Passwords don't match");
		$eroare = "Passwords don't match";
		exit();

		//daca conditiile de mai sus sunt indeplinite se selecteaza din baza de date.
	} else {
		$sql = "SELECT user_name FROM users WHERE user_name = '$username' ";
		$stmt = mysqli_stmt_init($DBconnect);

		//verificarea conexiunii si a validarii datelor 
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: register.php?error=sqlerror");
			exit();

		} else {
			mysqli_stmt_bind_param($stmt, "s", $user_name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rowCount = mysqli_stmt_num_rows($stmt);
			if ($rowCount > 0) {
				header("Location: register.php?error=usernametaken");
				$eroare = "User already exists";
			exit();

			} else {
				$sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$R_Password' ) ";
				$stmt = mysqli_stmt_init($DBconnect);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: register.php?error=sqlerror");
					exit();

				} else{

					$criptPassword = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "ss", $user_name, $criptPassword);
					mysqli_stmt_execute($stmt);
					header("Location: register.php?success=Registered");
					exit();
				}	
			}
		}
	}

//cele doua functii intrerup conexiunile,se fac automat de catre functiile de mai sus ,dar se salveaza mai multe resurse facandu-le manual ,ca mai jos.
	mysqli_stmt_close($stmt);
	mysqli_close($DBconnect);

}

 ?>