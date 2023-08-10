<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');



// DBController 
$db = new DBController();

// Product 
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart 
$Cart = new Cart($db);
