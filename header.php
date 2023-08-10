<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>M-Deal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="style.css">

    <?php
    
    require ('functions.php');
    ?>

</head>
<body>


<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-dark">
        <p class="font-rale font-size-12 text-black-50 m-1"></p>
        <div class="font-rale font-size-14">
            <a href="login.php" class="px-4 border-right border-left text-white">Login</a>
            <a href="register.php" class="px-4 border-right border-left text-white">Register</a>
            <a href="Wih" class="px-4 border-right text-white">Whislist (0)</a>
            <a href="logout.php" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a> 
        </div>
    </div>

    
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class=" navbar-brand" href="">M-Deal </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-georama">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products<i class="fas fa-arrow-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Blog <i class="fas fa-pen-square"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addProduct.php">Add Product <i class="fas fa-plus-square "></i></a>
                </li>
              
            </ul>
            <form action="" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-white"><?php echo count($product->getData('Cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>

</header>
    
<main id="main-site">