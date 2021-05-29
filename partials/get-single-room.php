<?php

require_once __DIR__ .'./database.php';

//get room id

$id = empty($_GET['id']) ? false : $_GET['id'];

if($id){
    $stmt = $ $conn->prepare("SELECT * FROM `stanze` WHERE `id`= '$id'");
    $stmt->bind-param('s', $id);
    //execute 
    $stmt->execute();
    //get results
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    }
}

// Close DB connection

$conn->close();