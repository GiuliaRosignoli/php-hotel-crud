<?php 
/* GET DATA to  be inserted in customers archive */

require_once __DIR__ . '/database.php';

// Get guests

$sql = "SELECT `id`,`room_number` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    $rooms = [];

    while($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    } // var_dump($rooms);
    
}  else {
    echo 'query error';
}

$conn->close(); 