
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackPanther Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images1/blogo.png" width="200px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.php">Products</a></li>                   
                    <li><a href="">Contact</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="login.php">Account</a></li>
                </ul>
            </nav>
            <a href="mycart.php"><img src="images1/kart.png" width="30px" height="30px"></a>
            <img src="images1/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!--------account page---------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images1/mod.gif" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                          
                        <form id="LoginForm" action="validation.php" method="post">  
                                                   
                            <input type="text" name="username" placeholder="Username" class="form-control" required>
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        
                        </form> 
                        
                        <form id="RegForm" action="registration.php" method="post">
                        
                            <input type="text"name="username" placeholder="Username" class="form-control" required>
                            <input type="email"name="email" placeholder="Email" class="form-control"required>
                            <input type="password"name="password" placeholder="Password" class="form-control" required>
                            <button type="submit" class="btn">Register</button>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-----------------footer----------------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download app for Android and iOS mobile phone.</p>
                    <div class="add-logo">
                        <img src="images1/play-store.png">
                        <img src="images1/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images1/blogo1.png">
                    <p>Our Purpose is to make sustainably make the pleasure and benefits of sports accessible to many
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"> Copyright 2021</p>
        </div>
    </div>
    <!------------------js for toggle menu--------------->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

<!--js for toggle form---->

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login() {
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

</script>



</body>

</html>