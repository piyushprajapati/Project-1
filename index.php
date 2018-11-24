<?php 
session_start();
require_once('dbconnection.php');

// Code for login system
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=md5($password);
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<scr ipt>alert('Invalid username or password');</script>";
$extra="index.html";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
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

  <span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="email" placeholder="Email" name="uemail" />
    <input type="password" placeholder="Password" name="password"/>
    <input type="submit" value="Log in" name="login"/>
	<a href="signup.php" class="txt3" style="text-decoration:none;float:left;color:#3399cc;cursor:pointer;margin-top:1%;font-size:12px;">
							Sign Up
	</a>
	<a href="forgot.php" class="txt3" style="text-decoration:none;float:right;color:#3399cc;cursor:pointer;margin-top:1%;font-size:12px;">
							forgot Password
	</a>
  </form>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>