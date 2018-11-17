        <?php 
	
	session_start();
	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'shopping_users');
	
	//storing the values in a variable

	if(isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	
	//ensure all fields are filled or not

		if(empty($username)) {
			array_push($errors, "Username is requried");
		}
		if(empty($email)) {
			array_push($errors, "Email is requried");
		}
		if(empty($password_1)) {
			array_push($errors, "Password is requried");
		}
		if($password_1 != $password_2) {
			array_push($errors, "Password do not match");
		}

		//if there is no errors,  save it in database

		if(count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password) 
					VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in.";
			header('location: welcome.php');

		}

	}

	//log user in form login page

	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if(empty($username)) {
			array_push($errors, "Username is requried");
		}
		
		if(empty($password)) {
			array_push($errors, "Password is requried");
		}
				
		if (count($errors) == 0) {
			$password = md5($password); //encrypting the password due to security reasons
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
			 	// log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in.";
				header('location: welcome.php');
			}
	    	else {
			 	array_push($errors, "Worng Username/Password combination");
			}
		}
	}




	//logout

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}


?>