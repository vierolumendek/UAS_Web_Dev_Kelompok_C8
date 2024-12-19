<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Membership</title>
  <link rel="stylesheet" type="text/css" href="styles_.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="loginpage.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not a member yet? <a href="regis.php">Sign In</a>
  	</p>
  </form>
</body>
</html>