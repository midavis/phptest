<?php
$host = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$username = getenv("MYSQL_SERVICE_USERNAME");
$password = getenv("MYSQL_SERVICE_PASSWORD");

// Create connection
$conn = new mysqli($host.":".$port, $username, $password);

echo "<h1>Evong's PHP App</h1>";
echo "<p>Testing webhook...</p>";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
