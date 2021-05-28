<?php 
/* GET DATA */

require_once __DIR__ . '/database.php';

// Get guests

$sql = "SELECT `id`,`name` FROM `ospiti`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    $customers = [];

    while($row = $result->fetch_assoc()) {
        $customers[] = $row;
    } var_dump($customers);
    
}  else {
    echo 'query error';
}

$conn->close(); 