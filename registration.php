<!DOCTYPE html
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/registration_design.css">
    <script src="js/form_validation.js"></script>
 </head>
  <body>
<form name="Registration" action="insert.php" onsubmit="return validateForm()" method="post">
  <div class="container">
    <h1>REGISTRATION</h1>
    <hr>

    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstName">

    <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastName">
 
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass">
   
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pass-repeat">
    <hr>

    <button type="submit" class="registerbtn">REGISTER</button>

    <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
  </div>

  
</form>
</body>
</html>