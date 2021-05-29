<?php
/* Database connection */

// Connection info

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel';

// Connection

$conn = new mysqli($host, $username, $password, $db_name);
// var_dump($conn);

// Check connection
if($conn && $conn->connect_error){
    die("Connection failed: $conn->connect_error ");
}

// echo '<h2>DB Connected</h2>';





?>