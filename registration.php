<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        <h1>Registration Page</h1>

        <form method="post" action="backend/authorization/registration.php">
            <label>
                <input type="text" placeholder="Login" name="login" id="login">
            </label>
            <p id="loginCheck">Incorrect login</p>

            <label>
                <input type="text" placeholder="Name" name="name" id="name">
            </label>
            <p id="">Incorrect name</p>

            <label>
                <input type="text" placeholder="Surname" name="surname" id="surname">
            </label>
            <p id="">Incorrect surname</p>

            <label>
                <input type="text" placeholder="E-mail" name="email" id="email">
            </label>
            <p id="">Incorrect e-mail</p>

            <label>
                <input type="text" placeholder="UIN" name="uin" id="uin">
            </label>
            <p id="">Incorrect uin</p>

            <label>
                <input type="password" placeholder="Password" name="pass" id="pass">
            </label>
            <p id="">Incorrect password</p>

            <button class="loginButton" type="submit">Login</button>
        </form>
    </section>
</section>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>
