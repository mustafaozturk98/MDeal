<?php
session_start();
include ('header.php');
?>

<?php
 count($product->getData('cart')) ? include ('Pattern/cartTemplate.php') :  include ('Pattern/NotFoundCart.php');
  

        
count($product->getData('wishlist')) ;
      


    
        include ('Pattern/NewPhones.php');
   
?>

<?php

include ('footer.php');
?>
