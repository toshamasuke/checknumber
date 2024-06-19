<?php

echo "Results for ".$_GET['msisdn'];
$servername = "checkmsisdn-server.mysql.database.azure.com";
$username = "qzodwxtrbd";
$password = "RS0nD7OfbVIRz$7j";
$dbname = "checkmsisdn-database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {echo "Successfully connected";}
echo "Done";
?>
