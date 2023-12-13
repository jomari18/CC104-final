<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post" class="login-form">
            <h2>Welcome to C’est <span class="orange-text">Délicieux</span></h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="input-group">
                <label for="uname">User Name</label>
                <input type="text" id="uname" name="uname" placeholder="Enter your username">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>

            <button type="submit" class="orange-btn">Login</button>
            <p class="register-link">Don't have an account? <a href="register.php" class="orange-text">Register here</a></p>
        </form>
    </div>
</body>
</html>
