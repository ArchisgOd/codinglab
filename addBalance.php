<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/addBalance_style.css">
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

    <section class="addBalanceBlock">
        <form method="post" action="backend/balance/addBalance.php">
            <h1>Card Number</h1>
            <label>
                <input type="text" placeholder="0000 0000 0000 0000">
            </label>
            <h1>Card owner</h1>
            <label>
                <input type="text" placeholder="VLADIMIR PUTIN">
            </label>
            <h1>Expiration date</h1>
            <label>
                <input type="month">
            </label>
            <h1>CVV2/CVC2</h1>
            <label>
                <input type="text" placeholder="999">
            </label>
            <h1>Deposit amount</h1>
            <label>
                <input type="text" placeholder="10000" name="balance" id="balance">
            </label>

            <button type="submit">Deposit</button>
        </form>
    </section>
</section>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>
