<?php require_once __DIR__ .'/partials/get-customers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
require_once __DIR__ . '/partials/head.php'; ?>

<body>
    <main>
        <h1>Customer archive</h1>
        <table>
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php  //Loop
                    if(!empty($customers)){
                        foreach($customers as)
                    }
                ?>
            </tbody>
        </table>
    </main>

</body>
</html>