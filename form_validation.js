
function validateForm() {

  var fn = document.forms["Registration"]["firstName"].value;
  if ( fn == "") {
    alert("Fill in your first name");
    return false;
  }

  var ln = document.forms["Registration"]["lastName"].value;
  if (ln == "") {
    alert("Fill in your last name");
    return false;
  }

  var eml = document.forms["Registration"]["email"].value;
  if (eml == "") {
    alert("Fill in your e-mail");
    return false;
  }

  var pass = document.forms["Registration"]["pass"].value;
  if (pass == "") {
    alert("Fill in your password");
    return false;
  }

  var repPass = document.forms["Registration"]["confirm_password"].value;
  if (repPass == "") {
    alert("Please, repeat  your password");
    return false;
  } 
  else if (repPass != pass) {
    alert("Passwords do not  match");
    return  false;
  }
  else {
    return true;
  }
}

function check() {
    if(document.getElementById('password').value ===
            document.getElementById('confirm_password').value)  {
        document.getElementById('message').innerHTML = "match";

    } else {
        document.getElementById('message').innerHTML = "no match";
        alert("Passwords do not match")
        document.getElementById('password').value = "";
        document.getElementById('confirm_password').value= "";
    }
}

function populateList() {

  //get results from database
$result = mysqli_query($con,"SELECT * FROM users_plovdiv ;
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>
}

