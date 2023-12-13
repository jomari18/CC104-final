<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="">

    <div class="container">
        <header class="header">
            <a href="#home" class="logo"><img src="image/cest delicieux.png" alt="" width="100"></a>
            <div class="navbar" id="navbar">
                <a href="home.php">Home</a>
                <a href="home.php">Services</a>
                <a href="home.php">About</a>
                <a href="home.php">Shop</a>
                <a href="home.php">Contact</a>
                <a href="home.php">Blog</a>
            </div>
            <div class="shopping">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-gitlab"></i>
                <a href="index.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <i class="fas fa-shopping-cart" color="orangered"></i>
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">

        </div>
    </div>
    <div class="card">
        <h1>Your Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
    <div class="total">0$</div>
    <div class="closeShopping">Close</div>
    <button class="checkoutBtn" onclick="checkout()">Checkout</button>
</div>

    </div>

    <script src="cart.js"></script>
</body>

</html>
