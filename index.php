<?php
$host = '172.30.115.83';
$port = '3306';
$username = 'admin';
$password = 'admin';

// Create connection
$conn = new mysqli($host.":".$port, $username, $password);

echo "<h1>Michelles's PHP App</h1>";
echo "<p>Testing webhook...</p>";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
