<?php

session_start();

//Variables

//$user_id="";
$f_name ="";
$l_name="";
$email="";
$password="";
$address1="";
$address2="";
$city="";
$province="";
$zip="";
$errors = array();

$db = mysqli_connect(
    'localhost','root','','esupper'
);

if(isset($_POST['submit'])){
//$user_id= $user_id =mysqli_real_escape_string($db, $_POST['user_id']);
$f_name =mysqli_real_escape_string($db, $_POST['f_name']);
$l_name=mysqli_real_escape_string($db, $_POST['l_name']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password=mysqli_real_escape_string($db, $_POST['password']);
$address1=mysqli_real_escape_string($db, $_POST['address1']);
$address2=mysqli_real_escape_string($db, $_POST['address2']);
$city=mysqli_real_escape_string($db, $_POST['city']);
$province=mysqli_real_escape_string($db, $_POST['province']);
$zip=mysqli_real_escape_string($db, $_POST['zip']);



if(empty($f_name)){
    array_push($errors,"First name is required");
}
if(empty($l_name)){
    array_push($errors,"Last name is required");
}
if(empty($email)){
    array_push($errors,"Email is required");
}
if(empty($password)){
    array_push($errors,"Password is required");
}
if(empty($address1)){
    array_push($errors,"Address is required");
}
if(empty($city)){
    array_push($errors,"City is required");
}
if(empty($province)){
    array_push($errors,"Province is required");
}
if(empty($zip)){
    array_push($errors,"zip is required");
}


$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1 ";
$result = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($result);


    if($user['email']== $email){
        array_push($errors, "User is already exists");
    }
}


if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO users (f_name,l_name, email, password,address1,address2,city,province,zip) 
              VALUES('$f_name','$l_name', '$email', '$password','$address1','$address2','$city','$province','$zip')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: user.php');
}

