<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


echo("Results for ".$_GET['msisdn']."<br>\n");
$servername = "servercheckmsisdn.mysql.database.azure.com";
$username = "admincheckmsisdn";
$password = "pass1MSISDN";
$dbname = "checkmsisdn";

echo("Starting Connection to DB...."."<br>\n");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}else {echo("Successfully connected"."<br>\n");}

?>
