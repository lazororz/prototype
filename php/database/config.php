<?php
$servername = "localhost";
$username = "spa";
$password = "3oLzl21#";
$dbname = "spa_";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
