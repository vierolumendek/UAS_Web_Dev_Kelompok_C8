<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Member Sign In</title>
  <link rel="stylesheet" type="text/css" href="styles_.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="regis.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	  <div class="input-group">
  	  <label>Birthday</label>
  	  <input type="date" name="birthday">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	  
  	<p>
  		Already a member? <a href="loginpage.php">Log In</a>
  	</p>
  </form>
</body>
</html>