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


?>