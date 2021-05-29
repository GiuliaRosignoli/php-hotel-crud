<?php require_once __DIR__ .'/partials/get-rooms.php'; ?>
<?php require_once __DIR__ .'/partials/get-single-room.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
require_once __DIR__ . '/partials/head.php'; ?>

<body>
    <main>
        
        <?php if(!empty($room)) {?>
            <h1>Room detail</h1>
            <ul>
            <li>Room number:</li>
            <li>Floor: </li>
            <li>Beds:</li>
        </ul>
        
        <?php } else { ?>
            <h2>No room found</h2>
        <?php } ?>


        
       
       <a href="./">Return to archive</a>
    </main>

</body>
</html>