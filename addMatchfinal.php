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
        <h1>Add new match</h1>
        <form method="post">
            <label>
                <input type="text" placeholder="White category" name="category" id="category">
            </label>

            <label>
                <input type="text" placeholder="White first team" name="team1" id="team1">
            </label>

            <label>
                <input type="text" placeholder="White second team" name="team2" id="team2">
            </label>

            <button class="loginButton" type="submit">Add match</button>
        </form>
    </section>
</section>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>

