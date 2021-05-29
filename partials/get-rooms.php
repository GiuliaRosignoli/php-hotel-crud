<?php 
/* GET DATA */

require_once __DIR__ . '/database.php';

// Get guests

$sql = "SELECT `id`,`room_number` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    $rooms = [];

    while($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    } // var_dump($customers);
    
}  else {
    echo 'query error';
}

$conn->close(); 