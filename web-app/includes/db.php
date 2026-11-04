<?php
// Development-only database configuration. Do not commit real credentials.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$servername = getenv('FRESH_DB_HOST') ?: 'localhost';
$username   = getenv('FRESH_DB_USER') ?: 'root';
$password   = getenv('FRESH_DB_PASSWORD') ?: '';
$dbname     = getenv('FRESH_DB_NAME') ?: 'fresh_grocers';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    error_log('Database connection error: ' . $conn->connect_error);
    http_response_code(500);
    exit('Database unavailable; review local configuration.');
}
?>