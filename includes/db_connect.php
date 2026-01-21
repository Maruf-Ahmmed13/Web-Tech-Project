<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP default is empty
$dbname = "swift_inventory_db"; 

// Create connection (Removed the port 8889 so it uses XAMPP default 3306)
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>