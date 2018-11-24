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
    <input type="text" placeholder="First Name" name="fname" class="input" style="width: 92%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 4%;
    font-family: 'Open Sans',sans-serif;
    font-size: 95%;"/>
    <input type="text" placeholder="Last Name" name="lname" class="input" style="width: 92%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 4%;
    font-family: 'Open Sans',sans-serif;
    font-size: 95%;"/>
	<input type="text" placeholder="Contact Number" name="contact" class="input" style="width: 92%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 4%;
    font-family: 'Open Sans',sans-serif;
    font-size: 95%;"/>
    <input type="email" placeholder="Email" name="email" class="input"/>
    <input type="password" placeholder="Password" name="password" class="input"/>
    <input type="submit" value="Log in" name="signup"/>
	<a href="index.php" class="txt3" style="text-decoration:none;float:left;color:#3399cc;cursor:pointer;margin-top:1%;font-size:12px;">
							Sign In
	</a>
  </form>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>