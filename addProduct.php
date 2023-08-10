<?php
session_start();
if(isset($_SESSION['add_product'])); 
 $error_message= '';

if($_POST){

    include_once('database/Connection.php'); 

   $itemname= $_POST['itemname'];
   $itembrand= $_POST['itembrand'];
   $price= $_POST['price'];
   
   
   $query = "INSERT INTO product(item_name,item_brand,item_price) VALUES('$itemname','$itembrand','$price')";
   $stmt= $conn->prepare($query);
    $stmt->execute();

   if($stmt->rowCount() > 0){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user=$stmt->fetchAll()[0];
        $_SESSION['add_product']=$product;

    header('Location:index.php');

   }else $error_message = 'Please make sure that username and password are correct.';
   
}
include ('header.php');

?>

        <?php
        if(!empty($error_message)) {
        ?>
        <div id="errorMessage">
           <strong>Error:</strong> <p>Error: <?= $error_message  ?></p>
        </div>
        <?php } ?>
        <div class="container py-5 text-center ">
         <div class="form-container">
                   <form action="addProduct.php" method="POST">
                    <div class="col-sm ">
                        <label for="#">Product name</label>
                        <input placeholder="Enter product name" name="itemname" type="text" />
                    </div>
                    <div class="col-sm">
                        <label for="#">Brand name</label>
                        <input placeholder="Enter Brand name" name="itembrand" type="text" />
                    </div>
                    <div class="col-sm">
                        <label for="#">Item price </label>
                        <input placeholder="Enter item price " name="price" type="double" />
                    </div>
                  
                    
                        <button class= qty-up border bg-light>
                            Add Product
                        </button>
                    
                    
                   </form>
                   
               </div>
            </div>
 

<?php
include ('footer.php');
?>

