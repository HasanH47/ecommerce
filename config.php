<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "ecommerce";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
  die("<script>aler('Connection Failed.)</script>");
}
