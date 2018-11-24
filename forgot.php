<?php 
session_start();
require_once('dbconnection.php');


//Code for Forgot Password

if(isset($_POST['send']))
{
$row1=mysqli_query($con,"select email,password from users where email='".$_POST['femail']."'");
$row2=mysqli_fetch_array($row1);

if($row2>0)
{
	
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";	
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
   
    <input type="email" placeholder="Enter Your Email" name="email" />

    <input type="submit" value="Log in" name="send" />
	
  </form>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>