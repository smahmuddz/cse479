<?php
// Replace these database credentials with your actual values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "summer2023";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read XML data
$xmlData = file_get_contents('index.xml');
$xml = simplexml_load_string($xmlData);



$stmt->close();
$conn->close();

echo "Data has been successfully inserted into the database.";
?>
