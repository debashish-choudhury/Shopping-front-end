<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In | Shopping Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<nav>
        <ul class="topnav" id="dropdownClick">
            <li><a href="index.php">Home</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
            <li class="topnav-right" id="signup"><a href="#signup">Sign up</a></li>
            <li class="topnav-right" id="signin"><a href="#signin">Sign In</a></li>            
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>
    <div class="container">
    <form method="post" action="signup.php" class="px-4 py-3">
        <?php include('errors.php'); ?>
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
            <label for="exampleDropdownFormEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Password</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password_1">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Password</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Re-Password" name="password_2">
            </div>
            
            <button type="submit" name="register" class="btn btn-primary">Sign up</button>
        </form>

    </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signin.php">Already a member? Sign in</a>

	
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>