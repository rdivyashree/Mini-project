<?php include('f_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>FACULTY LOGIN PAGE</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="f_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_faculty">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="f_register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>