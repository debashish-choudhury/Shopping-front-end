<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In | Shopping Website</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav>
        <ul class="topnav" id="dropdownClick">
            <li><a href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li class="topnav-right" id="signup"><a href="signup.php">Sign up</a></li>
            <li class="topnav-right" id="signin"><a href="#signin">Sign In</a></li>            
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>

	  	<form method="post" action="signin.php" class="px-4 py-3">
	  		<?php include('errors.php'); ?>
	   		<div class="form-group">
        	    <label for="exampleDropdownFormEmail1">Username</label>
            	<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
            </div>
		    <div class="form-group">
		      <label for="exampleDropdownFormPassword1">Password</label>
		      <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
		    </div>
		    
		    <button type="submit" name="login" class="btn btn-primary">Sign in</button>
		</form>

		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="signup.php">New around here? Sign up</a>
		
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>