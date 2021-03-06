<?php
include __DIR__ . '../classes/BookShop.php';
include __DIR__ . '../classes/User.php';
include __DIR__ . '../classes/VipUser.php';

$books = [
    new Book(
        'NormaL English',
        'Il mio metodo fast, fun and fantastic',
        'Norma Celetti',
        17.10,
        'Mondadori (15 giugno 2021)',
        'Italiano',
        264,
        '8804741716',
        620,
        '15.8x2.2x22.3 cm',
        4.9
    ),
    new Book(
        'La Canzone di Achille',
        'Miti saghe e leggende',
        'Madeline Miller',
        10.45,
        'Marsilio (10 gennaio 2019)',
        'Italiano',
        382,
        '8831780980',
        270,
        '20.2 x 2.4 x 13.2 cm',
        4.7
    ),
    new Book(
        'Il nervo Vago',
        'Come Stimolare e Attivare il Nervo Vago. Esercizi per Alleviare Ansia e Depressione, Prevenire Infiammazioni e Controllare le Emozioni',
        'Madeline Miller',
        14.97,
        'Independently published (29 marzo 2021)',
        'Italiano',
        132,
        '8730299467',
        160,
        '12.7 x 0.76 x 20.32 cm',
        4.4
    )
];

$user = [
    new User('domingo79', 'dodo79', 'domi@exemple.it'),
    new User('carla88', '88carla', 'carla@exemple.com'),
    new User('felcezz', 'fazz12', 'felce@exemple.it')
];

$vipUser = [
    new VipUser('Diego90', 'dgdg90', 'diego90@gmail.com', 'az9FGH-1254p1'),
    new VipUser('lazzaroZ', 'zaza987', 'laz@gmail.com', 'azpphH-plm4p1')
];
