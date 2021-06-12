<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/login_style.css">
</head>
<body>
<section id="menu">
    <img src="https://img.icons8.com/ios-filled/50/ffffff/multiply.png" alt="exit" id="exitIcon">
    <a href="index.php" class="menuList">Home</a>
</section>

<section id="all">
    <section class="navbar">
        <nav>
            <div class="leftSide">
                <div id="menuButton">
                    <div class="menuLine"></div>
                    <div class="menuLine"></div>
                    <div class="menuLine"></div>
                </div>
                <a href="index.php" class="logo_box">TaDaNatBet</a>
            </div>

            <div class="rightSide">

            </div>
        </nav>
    </section>

    <section>
        <h1>Login Page</h1>

        <?php
        if (isset($_GET['id'])) {
            echo "<h1 style='color: #d00a0a; margin: 10px 0'>Invalid username or password</h1>";
        }
        ?>

        <form method="post" action="backend/authorization/auth.php">
            <label>
                <input type="text" placeholder="Login" name="login" id="login">
            </label>

            <label>
                <input type="password" placeholder="Password" name="pass" id="pass">
            </label>

            <button class="loginButton" type="submit">Login</button>
        </form>
    </section>

</section>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>
