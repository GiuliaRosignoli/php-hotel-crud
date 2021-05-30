
<?php require_once __DIR__ .'/partials/scripts/get-single-room.php'; ?>


<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php require_once __DIR__ .'/partials/templates/head.php'; ?>

<body>
    <main class="container">
        
        <?php if(!empty($room)) {?>
            <h1>You have selected: room no. <?php echo $room['room_number']; ?></h1>
            <ul>
            <li>Room number: <?php echo $room['room_number']; ?></li>
            <li>Room ID: <?php echo $room['id']; ?></li>
            <li>Floor: <?php echo $room['floor']; ?></li>
            <li>Number of beds: <?php echo $room['beds']; ?></li>
        </ul>

        <?php } else { ?>
            <h2>No room found</h2>
        <?php } ?>


       <a id="link" href="./">Return to archive</a>
    </main>

</body>
</html>