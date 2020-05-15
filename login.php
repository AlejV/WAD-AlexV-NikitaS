<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
 <link rel="stylesheet" href="style.css" /> 
</head>
<body>
<?php
require('database.php');
session_start();

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con, $username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
         $query = "SELECT * FROM `users_plovdiv` WHERE Email='$username'
and Password='$password' and UserRole = 'user'";
 $result = mysqli_query($con,$query) or die(mysqli_error($con));
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: profile_user.php");
     exit();

         }else{
 		$query = "SELECT * FROM `users_plovdiv` WHERE Email='$username'
and Password='$password' and UserRole = 'admin'";
 $result = mysqli_query($con,$query) or die(mysqli_error($con));
 $rows = mysqli_num_rows($result);
 if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: profile_user.php");
     exit();
 } else {
 	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";

  }
 }
}else{ 

    	
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="username" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="LOGIN" />
</form>
<div class="container login">
<p>Dont have an account? <a href="registration.php">Register</a>.</p>
<?php } ?>
</div>
</body>
</html>