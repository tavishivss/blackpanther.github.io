<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<html lang="en">

<head>
    <meta charset="utf-8">    
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-image: radial-gradient(white, turquoise);">
<div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images1/blogo.png" width="200px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html"><h6 style="color:black;">Home</h6></a></li>
                    <li><a href="index.php"><h6 style="color:black;">Products</h6></a></li>
                    <li><a href=""><h6 style="color:black;">About</h6></a></li>
                    <li><a href=""><h6 style="color:black;">Contact</h6></a></li>
                    <li><a href="login.php"><h6 style="color:black;">Account</h6></a></li>
                </ul>
            </nav>
            <?php 
              $count=0;
              if(isset($_SESSION['cart']))
              {
                  $count=count($_SESSION['cart']);
              }
            ?>
            <a href="mycart.php" class="btn btn-outline-success"> My Cart (<?php echo $count; ?>)</a>
        </div>
    </div>
</body>
