<?php
/* Database connection */

// Connection info

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel';

// Connection

$conn = new mysqli($host, $username, $password, $db_name);
var_dump($conn);

// Check connection
if($conn && $conn->connect_error){
    die("Connection failed: $conn->connect_error ");
}

// echo '<h2>DB Connected</h2>';

// Get DB data

$sql = "SELECT `room_number`, `floor` FROM `stanze` WHERE `id = 7`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
       // var_dump($row);
       echo '<h2>Stanza n: ' . $row['room_number'] . 'piano: ' . $row['floor'] . '<h2>';
    }
} elseif($result){
    echo '<h2>No results found </h2>';
} 





?>