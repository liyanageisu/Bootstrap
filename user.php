<?php include('connection.php') ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
  }
?>
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
                <form class="form-inline my-2 my-lg-0">
                <div class="para">
                  <p>You are logged in as a user</P>
                 </div>
                  <a class="btn btn-secondary" name="logout" role="button" href="">Log out</a>
                </form> 
            
        </nav>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            <div class="content">
                <?php if(isset($_SESSION['success'])) : ?>
                  <div class="error success">
                    <h3>
                     <?php 
          	            echo $_SESSION['success']; 
          	            unset($_SESSION['success']);
                      ?>
                  	</h3>
                  </div>
                <?php endif ?>
                <?php  if (isset($_SESSION['email'])) : ?>
    	            <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
    	            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                <?php endif ?>
            </div>
    
    </body>

</html>