<?php include('connection.php') ?>
<?php include('register.php') ?>

<?php

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    
    	if(mysqli_num_rows($results)) {
  			$_SESSION['email'] = $email;
  			$_SESSION['success'] = "You are logged in now";
  	 		header('location: user.php');
  		}else {
  			array_push($errors, "Wrong username or password combination");
		}

	}
}

?> 