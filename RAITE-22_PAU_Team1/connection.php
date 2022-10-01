<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";
 
// Connection
$con = new mysqli($servername,$username, $password,$dbname);
 
// For checking if connection is
// successful or not
if ($con->connect_error) {
  die("Connection failed: "
      . $con->connect_error);
}
?>