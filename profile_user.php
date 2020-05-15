<?php
  require('header.php');
  require('menu_logged_in.php');
  ?> 
  
<!-- <body>
<table>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
<th>User Role</th>
</tr> -->

<?php
require('database.php');
session_start();
$sql = "SELECT * FROM users_plovdiv WHERE Email = '" . $_SESSION['username'] . "'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["FirstName"] . "</td><td>". $row["LastName"] . "</td><td>". $row["Email"] . "</td><td>" . $row["Password"] . "</td><td>" . $row["UserRole"]. "</td></tr>";
}
echo "</table>";

// echo "<tr>";
//   echo "<td>" . $row['firstName'] . "</td>";
//   echo "<td>" . $row['lastName'] . "</td>";
//   echo "<td>" . $row['email'] . "</td>";
//   echo "<td>" . $row['userID'] . "</td>";
//   echo "</tr>";
} 


// else { echo "0 results"; }
$con->close();
  require('footer.php')
?>
