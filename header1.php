<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body style="background-image: radial-gradient(white, turquoise);">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images1/blogo.png" width="200px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login.php">Account</a></li>
                </ul>
            </nav>
            <?php 
              $count=0;
              if(isset($_SESSION['cart']))
              {
                  $count=count($_SESSION['cart']);
              }
            ?>
            <a href="mycart.php" class="btn btn-outline-success">Cart (<?php echo $count; ?>)</a>
        </div>
    </div>


  
