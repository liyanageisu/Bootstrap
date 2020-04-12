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
            <!-- <img src="/image/favicon.png" width="30" height="30" alt="" >  -->E-SUPPER
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
                  <a class="btn btn-secondary" href="index.php" role="button">Login</a>
                 </form> -->
            
        </nav>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <div class="container-fluid bg-signup">
      <div class="logo">
        <img src="../image/logo.png" alt="logo-1" width="300px" height="300px">
      </div>
      <div class="row">
        <div class="coL-md-4 col-sm-3 col-xm-12"></div>
        <div class="coL-md-3 col-sm-3 col-xm-12"></div>
        <!-- Sign up form start -->
       <form class="form-conatiner" method="post" action="signup.php">
          <?php include('errors.php')?>
         <h1>Sign up</h1>
        <div class="form-row">
             <!-- <input type="hidden" name="user_id" id="user_id" value="<//?php $row['$user_id']; ?>">  -->
          <div class="col-md-5">First Name
            <input type="text" class="form-control" placeholder="First name" name="f_name" value="<?php echo $f_name; ?>">
          </div>
          <div class="col-md-5">Last Name
            <input type="text" class="form-control" placeholder="Last name" name="l_name" value="<?php echo $l_name; ?>">
          </div>
          <div class="col-md-5">User name
            <input type="text" class="form-control" placeholder="User name" name="username" value="<?php echo $username; ?>">
          </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-8">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="<?php echo $password; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
             <label for="inputAddress">Address</label>
             <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1" value="<?php echo $address1; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2"  value="<?php echo $address2; ?>">
           </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $city; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputProvince">Province</label>
            <select id="inputProvince" class="form-control" name="province" value="<?php echo $province; ?>">
              <option selected>Choose...</option>
              <option>Western</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="zip" value="<?php echo $zip; ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-secondary btn-lg btn-block" name="submit">Sign in</button>
       </form>
       </div>
  <div class="coL-md-4 col-sm-4 col-xm-12"></div>
  </div>
<!-- Signup form end -->


   </body>
</html>