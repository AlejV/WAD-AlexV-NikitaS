<?php

require('header.php');
require('database.php');
session_start();

$sql = "SELECT firstName  from users_plovdiv"; 
$result = $con->query($sql);

?>

<select name="users" onchange="showUser(this.value)">   
<?php

while ($rows= $result->fetch_assoc())
{
    $user_name =$rows['firstName'];

    echo "<option value='$user_name'>$user_name</option>";
}

?>
</select>

<div id="txtHint">Customer info will be listed here...</div>

<script>
function showUser(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "get_user.php?q="+str, true);
  xhttp.send();
}
</script>
<?php
require('footer.php');
?>

