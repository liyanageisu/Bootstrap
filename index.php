<?php include('register.php') ?>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/global.css" type="text/css">
        <title>E-supper</title>
    </head>
    
    <body>
          <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="" class="navbar-brand">
             <img src="../image/pinterest_profile_image.png" width="30" height="30" alt="" > E-SUPPER
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#ccsl"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center"  id="ccsl">
            <ul class="Navbar-nav">
                <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
               
                <li class="nav-item dropdown shop">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item about"><a href="" class="nav-link">About</a></li>
                <li class="nav-item contact"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span><img src="../image/cart.png" width="30" height="30" alt="">[0]</a></li>
            </ul>
           </div>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <a class="btn btn-secondary" href="signup.php" role="button">Sign up</a>
                 </form> -->
            
        </nav>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <div class="conatiner bg-login">
          <div class="row">
            <div class="coL-md-2 col-sm-3 col-xm-12"></div>
            <div class="coL-md-3 col-sm-3 col-xm-12"></div>
            <!-- start form -->
            <form class="form-conatiner" method="post" action="index.php">
              <?php include('errors.php')?>
              <h1>Login</h1>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>
              <button type="submit" class="btn btn-success btn-block" value="login" name="login">Submit</button>
              <p>Not yet a member? <a href="signup.php">Sign up</a></P>
            </form>
            <!-- end form -->
          </div>
          <div class="coL-md-3 col-sm-4 col-xm-12"></div>
           </div>
          </div>
        </div>
       
    </body>
</html>

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
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: user.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>