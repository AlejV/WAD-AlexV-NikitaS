<?php
require('database.php');
 
// Escape user inputs for security
$firstName = mysqli_real_escape_string($con, $_REQUEST['firstName']);
$lastName = mysqli_real_escape_string($con, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$pass = mysqli_real_escape_string($con, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO users_plovdiv (FirstName, LastName, Email, Password ,UserRole) VALUES ('$firstName', '$lastName', '$email', '$pass','user')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
    header("Location: profile_user.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>