 <!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

 <?php

    include __DIR__ . '/Models/Category.php';
    include __DIR__ . '/Models/Products.php';

    $categories = [
        new Category("Cani"),
        new Category("Gatti")
    ];

    $generals = [
        $croccantini = new Product("img/foodan.jpg", "Croccantini", "HappyDog", "Cibo per Cani", 15, new Category('Cani')),

        $cuccia = new Product("img/cat.jpg", "Culla", "HappyCat", "Culla per Gatti", 50, new Category('Gatti')),

        $giocattolo = new Product("img/play.jpg", "Giocattolo", "HappyCat", "Robot Giocattolo per Gatti", 240, new Category('Gatti'))
    ];

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Link BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <title>Php-OOP-2</title>
 </head>

 <body>
     <div class="container mt-5">
         <div class="row row-cols-3 g-3 text-center">
             <?php foreach ($generals as $product) { ?>
                 <div class="col">
                     <div class="card">
                         <div class="card-body">
                             <img src="<?php echo $product->image ?>" alt="">
                             <h2 class="card-title"><?php echo $product->title ?></h2>
                             <p class="card-text">Price: <?php echo $product->price ?></p>
                             <p class="card-text">Category: <?php echo $product->categories->animal ?></p>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </body>

 </html>