<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/editProfile_style.css">
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

    <section class="changingBox">
        <h1>Edit information</h1>
        <form method="post" action="backend/editProfile/editEmail.php">
            <div>
                <input type="text" name="newEmail" id="newEmail" placeholder="Enter new email">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
                <button type="submit">Change</button>
            </div>
        </form>

        <form method="post" action="backend/editProfile/editPassword.php">
            <div>
                <input type="text" name="newPassword" id="newPassword" placeholder="Enter new password">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
                <button type="submit">Change</button>
            </div>
        </form>

        <a href="user.php" class="fuckGoBack">Go back</a>
    </section>
</section>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>
