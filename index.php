<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


echo("Results for ".$_GET['msisdn']);
/** $servername = "checkmsisdn-server.mysql.database.azure.com"; **/
//$username = "qzodwxtrbd";
//$password = "RS0nD7OfbVIRz$7j";
//$dbname = "checkmsisdn-database";


 $servername="99.000webhost.io";
//$username = "id22337126_checkmsisdnadmin";
//$password = "checkMSISDN1pass+";
//$dbname = "id22337126_checkmsisdnserver";



echo("Starting Connection to DB....");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {echo("Successfully connected");}
echo("Done Connection to DB...");
?>
