<?php
$severName = "localhost";
$dbUser = "admin";
$dbPass = "Sup3rSecreTPa$$";
$dbName = "lamp_login";

$conn = mysqli_connect($serverName,$dbUser,$dbPass,$dbName);

if (!$conn){
	die("[!] Connection FAILED: " . mysqli_connect_error());
}