<?php require_once __DIR__ .'/partials/scripts/get-rooms.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
// Head inclusion
require_once __DIR__ . '/partials/templates/head.php'; ?>

<body>
    <main class="container">
        <h1>Rooms archive</h1>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Room Number</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php  //Loop
                    if(!empty($rooms)){
                        foreach($rooms as $room) {?>
                        <tr>
                            <td><?php echo $room['id'];?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            <td><a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View Details</a></td>
                        </tr>
                    <?php } 
                }

                ?>
                <h2></h2>
            </tbody>
        </table>
    </main>

</body>
</html>