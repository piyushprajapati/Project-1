<?php 
session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=md5($password);
	//$enc_password=$_POST($password);
	$a=date('Y-m-d');
	$msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno ,posting_date) values('$fname','$lname','$email','$enc_password','$contact','$a')");
   if($msg)
     {
    echo "<script>alert('Register successfully');</script>";
     }
}

?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Project</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <span href="#" class="button" id="toggle-login">Registration</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Registration Form</h1>
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="email" placeholder="First Name" name="fname" />
    <input type="email" placeholder="Last Name" name="lname"/>
	<input type="email" placeholder="Contact Number" name="contact"/>
    <input type="email" placeholder="Email" name="email"/>
    <input type="password" placeholder="Password" name="password"/>
    <input type="submit" value="Log in" name="signup"/>
	
  </form>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>