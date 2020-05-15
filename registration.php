<!DOCTYPE html
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="registration_design.css">
    <script src="form_validation.js"></script>
 </head>
  <body>
<form name="Registration" action="insert.php"  onsubmit="return validateForm()" method="post">
  <div class="container">
    <h1>REGISTRATION</h1>
    <hr>

    <label for="firstName"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstName">

    <label for="lastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter First Name" name="lastName">
 
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder ="Enter  password" name="password" id="password" type="password"/>
    </label>
    <label for="pass-repeat"><b>Confirm password</b></label>
    <input type="password" placeholder="Repeat your password" name="confirm_password" id="confirm_password" onchange="check()"/> 
    <span id='message'></span>
    <hr>

    <button type="submit" id="submit" class="registerbtn">REGISTER</button>

    <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
  </div>

  
</form>
</body>
</html>