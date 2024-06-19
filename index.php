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


$resultMyMTNApp = $conn->query("SELECT * from mymtnactivity where msisdn="".$_GET['msisdn']."");
if ($resultMyMTNApp->num_rows > 0) { echo "Active on MyMTN"; } else { echo "not active on MyMTN";}

$resultMoMoApp = $conn->query("SELECT * from momoappactivity where msisdn="".$_GET['msisdn']."");
if ($resultMoMoApp->num_rows > 0) { echo "Active on MoMo App"; } else { echo "Not active on MoMo App";}

$resultYelloX = $conn->query("SELECT * from yelloxisland where msisdn="".$_GET['msisdn']."");
if ($resultYelloX->num_rows > 0) { echo "Y'ello X"; } else { echo "not Y'ello X";}

$resultYelloX = $conn->query("SELECT * from hvcstatus where msisdn="".$_GET['msisdn']."");
if ($resultYelloX->num_rows > 0) { echo "HVC"; } else { echo "not HVC";}


?>
