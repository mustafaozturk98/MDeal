<?php
session_start();
if(isset($_SESSION['user'])) header('location:index.php');
 $error_message= '';

if($_POST){

    include_once('database/Connection.php'); 

   $username= $_POST['username'];
   $password= $_POST['password'];
   
    $query = 'SELECT * FROM user WHERE user.email="'.$username.'" AND user.password="'.$password.'"';
    $stmt= $conn->prepare($query);
    $stmt->execute();

   if($stmt->rowCount() > 0){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user=$stmt->fetchAll()[0];
        $_SESSION['user']=$user;

    header('Location:cart.php');

   }else $error_message = 'Please make sure that username and password are correct.';
   
}   include ('header.php');
 ?>
        <div class="form-container py-5 text-center">
   <form action="login.php" method="POST">
                    <div class="form-container">
                        <label for="#">Username</label>
                        <input placeholder="Username" name="username" type="text" />
                    </div>
                    <div class="col">
                        <label for="#">Password</label>
                        <input placeholder="Password" name="password" type="password" />
                    </div>
                    <div class="col">
                        <button class= qty-up btn btn-primary >
                          Login
                        </button>
                    </div>
                    <div class="col"><p>Don't have an account? <a href="register.php">Sign up</a></p></div>
                   </form>
                   </div>
                   <?php
include ('footer.php');
?>
                
