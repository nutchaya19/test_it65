<?php
$servername = "localhost";
$username = "it65309010004";
$password = "it65309010004";
$dbname = "it65309010004";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  echo "<h1>Connection Fail</h1>" . mysqli_connect_error();
}
else{
    //echo "<h1>Connection Successful</h1>";
}

mysqli_set_charset($conn, "utf8");
?>