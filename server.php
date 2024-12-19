<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'sign_in');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");  }
  if (empty($birthday)) { array_push($errors, "Please input your birthday"); }
  if (empty($address)) { array_push($errors, "Address is required"); }

  $user_check_query = "SELECT * FROM sign_in WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already used");
    }
  }


  if (count($errors) == 0) {
  	$password = ($password_1);

  	$query = "INSERT INTO sign_in (username, email, pass, birthday, address) 
  			  VALUES('$username', '$email', '$password','$birthday', '$address')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now a member! <br> Please Login to Continue";
  	header('location: loginpage.php');
  }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = ($password);
        $query = "SELECT * FROM sign_in WHERE username='$username' AND pass='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: home.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>
