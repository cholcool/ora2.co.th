<?php
$servername = "localhost";
$hostname = "sunstar_ora2";
$hostpass = "u7c2g7g@S";
$dbname = "Sunstar";

// Create connection
$conn = new mysqli($servername, $hostname, $hostpass, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
?>