<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>

<nav>
    <div class="left-links">
        <a class="links selected" href="#">Home</a>
        <a class="links" href="#">Products</a>
        <a class="links" href="#">About Us</a>
        <a class="links" href="#">Deals</a>
    </div>
    <div class="right-links">
        <?php if (isset($_SESSION["userid"])): ?>
        <a class="links" href="#"><?= $_SESSION["useruid"]; ?></a>
        <a class="links" href="includes/logout.inc.php">Logout</a>
        <?php else: ?>
        <a class="links" href="#">Sign Up</a>
        <a class="links" href="#">Login</a>
        <?php endif; ?>
    </div>
</nav>

<section class="forms-section">
    <h1 class="section-title">Forms</h1>
    <div class="forms">
        <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Login
                <span class="underline"></span>
            </button>
            <form action="includes/login.inc.php" class="form form-login" method="post">
                <fieldset>
                    <legend>Please, enter your email and password for login.</legend>
                    <div class="input-block">
                        <label for="login-email">Username</label>
                        <input id="login-email" type="text" name="uid" required>
                    </div>
                    <div class="input-block">
                        <label for="login-password">Password</label>
                        <input id="login-password" type="password" name="pwd" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-login" name="submit">Login</button>
            </form>
        </div>
        <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
                Sign Up
                <span class="underline"></span>
            </button>
            <form action="includes/signup.inc.php" class="form form-signup" method="post">
                <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <div class="input-block">
                        <label for="signup-email">Username</label>
                        <input id="signup-email" type="text" name="uid" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password">Password</label>
                        <input id="signup-password" type="password" name="pwd" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password-confirm">Confirm password</label>
                        <input id="signup-password-confirm" type="password" name="pwdrepeat" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-email">E-mail</label>
                        <input id="signup-email" type="text" name="email"required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-signup" name="submit">Sign Up</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
