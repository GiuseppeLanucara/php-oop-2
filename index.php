 <!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

 <?php

    include __DIR__ . '/Models/Category.php';
    include __DIR__ . '/Models/Product.php';

    $categories = [
        new Category("Cani"),
        new Category("Gatti")
    ];

    $generals = [
        $croccantini = new Product(),
        var_dump($croccantini),

        $cuccia = new Product(),
        var_dump($cuccia),
    ];
