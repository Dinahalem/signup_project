<?php
$servername = 'localhost:8111';
$username = 'root';
$password = '';
$DATABASE = 'signupforms';

// Create connection
$conn = mysqli_connect($servername, $username, '', $DATABASE);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>