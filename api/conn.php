<?php
header("Access-Control-Allow-Origin: *");  // 允許所有來源
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
// Create 4 variables to store these information
$server="database-1.cxzg4akd6dhy.ap-northeast-1.rds.amazonaws.com";
$username="admin";
$password="Bk+w%H86";
$database = "gasstation";

// $server="localhost";
// $username="root";
// $password="";
// $database = "test";
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?> 