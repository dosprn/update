<?php 

   require_once( "./utils/sql.php" );


#echo get_client_ip() . "<br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected successfully<br>";
}
$conn->close();

?>