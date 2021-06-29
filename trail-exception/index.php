<?php
require __DIR__ . '/trail/getFullName.php';
require __DIR__ . '/classes/Products.php';
require __DIR__ . '/classes/Pizza.php';
require __DIR__ . '/classes/CreditCard.php';
require __DIR__ . '/dataBase/db.php';
require __DIR__ . '/classes/User.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>

<body>
    <div class="container" style="width: 70%; margin:0 auto;">
        <h1>Menu Pizze</h1>
        <?php foreach ($pizza as $value) : ?>
            <h3><?= $value->getFullName() ?></h3>
        <?php endforeach; ?>


        <p>Acquista comodamente con carta di credito</p>
        <?php
        try {
            $payCard[0]->controllo('1258');
        } catch (Exception $e) {
            echo 'errore: ' . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>