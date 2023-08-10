<?php
   
  
    $servername='localhost';
    $username='root';
    $password='';
   
  
  
      try{
          $conn= new PDO("mysql:host=$servername;dbname=mobileproject",$username,$password);
          $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          echo '';
      }catch(PDOException $e){
        $error_message = $e->getMessage();
      }
  
  



    include ('header.php');
   

?>

<?php

        
    //  include banner area  
        include ('Pattern/bannerArea.php');
    

    //  include top sale section 
        include ('Pattern/topSale.php');
   

    //  include special price section  
         include ('Pattern/specialPrices.php');
    

    // include banner ads  
        include ('Pattern/bannerAds.php');
    

    //  include new phones section  
        include ('Pattern/NewPhones.php');
    

  
    

?>


<?php
include ('footer.php');
?>