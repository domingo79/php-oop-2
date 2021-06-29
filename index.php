<?php
require __DIR__ . '/classes/BookShop.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/VipUser.php';
require __DIR__ . '/dataBase/db.php';

// var_dump($normalEnglish, $laCanzoneDiAchille, $ilNervoVago);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Book Shop On Line</title>
</head>

<body>
    <div class="container-xl d-flex flex-wrap justify-content-between">

        <?php foreach ($books as $value) : ?>

            <div class="card " style="width: 28rem;">
                <img style="width: 440px;" src="https://picsum.photos/id/237/400/200" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title"> <?= $value->getTitle(); ?></h2>
                    <p class="card-text"><?= $value->getSubTitle(); ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Autore: <?= $value->getAuthor(); ?></li>
                    <li class="list-group-item">Prezzo: € <?= $value->getPrice(); ?></li>
                    <li class="list-group-item">Editore: <?= $value->editor; ?> </li>
                    <li class="list-group-item">Lingua : <?= $value->language; ?> </li>
                    <li class="list-group-item">Copertina flessibile : <?= $value->flexible_cover; ?> </li>
                    <li class="list-group-item">ISBN : <?= $value->ISBN_10; ?> </li>
                    <li class="list-group-item">Peso articolo : <?= $value->articole_weight; ?> </li>
                    <li class="list-group-item">Dimensioni : <?= $value->size; ?> </li>
                    <li class="list-group-item">Valutazione : <?= $value->customer_reviews; ?> </li>
                </ul>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-success">Acquista</button>
                    <button type="button" class="btn btn-outline-primary">altri Correlati</button>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</body>

</html>