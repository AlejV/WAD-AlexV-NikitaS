<?php 
require('database.php');

// Escape user inputs for security
$firstName = mysqli_real_escape_string($con, $_REQUEST['firstName']);
$lastName = mysqli_real_escape_string($con, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$pass = mysqli_real_escape_string($con, $_REQUEST['password']);

$sql = "SELECT * FROM users_plovdiv WHERE Email = '" . $_SESSION['username'] . "'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {


?>