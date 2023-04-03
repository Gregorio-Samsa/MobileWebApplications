<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Online Shopping</title>
</head>
<body>
    <div class="mainContainer">
        <div class="container">
            <div class="container">
                <h1>EMS</h1>
            </div>
            <div class="container">
                <form action="login_process.php" method="POST">
                <div>
                    <ul>
                        <?php if(isset($_GET['error'])) { ?>
                        <p class='error'><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <li><p>Username or Email Address</p></li>
                        <li><input type="text" name="username" id="username"></li>
                        <li><p>Password</p></li>
                        <li><input type="password" name="password" id="password"></li>
                        <li><a href="#" class="subtitle">Forgot your password?</a></li>
                    </ul>
                </div>
                <div class = 'captcha_container'>
                    <img src="captcha.php" alt="captcha">
                    <input type="text" name="vercode" id="vercode">
                </div>
                <div>
                    <ul>
                        <li><button name="login" id="login" type="submit">Login</button></li>
                        <li><a href="#" class="subtitle">Don't have an account? Create Account</a></li>
                    </ul>
                </div>
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>