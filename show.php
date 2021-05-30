<?php require_once __DIR__ .'/partials/scripts/get-rooms.php'; ?>

<?php require_once __DIR__ .'/partials/scripts/get-single-room.php'; ?>


<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php require_once __DIR__ .'/partials/templates/head.php'; ?>

<body>
    <main>
        
        <?php if(!empty($room)) {?>
            <h1><?php echo $room['room_number']; ?> </h1>
            <ul>
            <li>Id: <?php echo $room['id']; ?></li>
            <li>Floor: <?php echo $room['floor']; ?></li>
            <li>Beds: <?php echo $room['beds']; ?></li>
        </ul>

        <?php } else { ?>
            <h2>No room found</h2>
        <?php } ?>


       <a href="./">Return to archive</a>
    </main>

</body>
</html>