<?php

include_once __DIR__ . '/../Models/Item.php';


$item_1 = new item('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'food', 'dog', 25);

$item_2 = new item('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'food', 'dog', 30);

$item_3 = new item('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'food', 'cat', 20);

$item_4 = new item('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'food', 'fish', 15);

$item_5 = new item('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'accessory', 'bird', 55);

$item_6 = new item('Cartucce Filtranti per Filtro EasyCrystal
', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'accessory', 'fish', 23);


$item_7 = new item('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'accessory', 'dog', 18);

$item_8 = new item('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'accessory', 'cat', 16);

$items = [$item_1, $item_2, $item_3, $item_4, $item_5, $item_6, $item_7, $item_8];

// var_dump($items);
