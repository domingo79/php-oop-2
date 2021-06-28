<?php
require __DIR__ . '/classes/BookShop.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/VipUser.php';
require __DIR__ . '/server/database.php';

// var_dump($normalEnglish, $laCanzoneDiAchille, $ilNervoVago);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop On Line</title>
</head>

<body>


    <?php foreach ($books as $value) : ?>
        <h1>Titolo: <?= $value->getTitle(); ?></h1>
        <h2>Sottotitolo: <?= $value->getSubTitle(); ?></h2>
        <h3>Autore: <?= $value->getAuthor(); ?></h3>
        <h4>Prezzo: € <?= $value->getPrice(); ?></h4>

        <h2>Dettaglio del prodotto</h2>

        <p>Editore: <?= $value->editor; ?> </p>
        <p>Lingua : <?= $value->language; ?> </p>
        <p>Copertina flessibile : <?= $value->flexible_cover; ?> </p>
        <p>ISBN : <?= $value->ISBN_10; ?> </p>
        <p>Peso articolo : <?= $value->articole_weight; ?> </p>
        <p>Dimensioni : <?= $value->size; ?> </p>
        <p>Valutazione : <?= $value->customer_reviews; ?> </p>

    <?php endforeach; ?>
</body>

</html>