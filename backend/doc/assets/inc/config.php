
<?php
$dbuser = "root";
$dbpass = "050601"; // Use your actual database password here
$host = "localhost";
$db = "hmisphp";
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

