<?php
$host = '172.30.121.61';
$port = '3306';
$username = 'michelle';
$password = 'michelle';

// Create connection
$conn = new mysqli($host.":".$port, $username, $password);

echo "<h1>For NASA PHP App</h1>";
echo "<p>Testing webhook...</p>";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
