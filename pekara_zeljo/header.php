<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/bs/9/9f/FK_%C5%BDeljezni%C4%8Dar_Sarajevo.png">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekara Željo</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>

<body>

  <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0"><a href="tel:0038762411268" class="font-rale font-size-12 text-black-50 m-0">Vratnik, Sarajevo 71000, Bosna i Hercegovina, (+387)62-411-268</a></p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="./cart.php" class="px-3 border-right text-dark">Whishlist (<?php echo count($product->getData('wishlist')); ?>)</a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <img class="navbar-img" src="./assets/zeljo_logo.png">
            <a class="navbar-brand" href="./index.php">Pekara Željo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Naslovna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#top-sale">Proizvodi <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutUs.php">O nama</a>
                    </li>
                    <li class="nav-item gore">
                        <a class="scrollMe nav-link" href="#footer">Kontaktirajte nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Coming Soon...</a>
                    </li>
                </ul>
                <form action="./cart.php" class="font-size-14 font-rale">
                    <a href="./cart.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">
                        <?php echo count($product->getData('cart')); ?>
                        </span>
                    </a>
                </form>
            </div>
        </nav>
 

    </header>

<main id="main-site">