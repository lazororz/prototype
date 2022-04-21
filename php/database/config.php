<?php
$servername = "localhost";
$username = "beroeps";
$password = "Xg6gj90!";
$dbname = "crud_";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
