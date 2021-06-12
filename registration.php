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

    <section class="registrationBlock">
        <h1>Registration Page</h1>

        <form method="post" action="backend/authorization/registration.php">
            <label for="username">
                <input type="text" placeholder="Username" name="login" id="login" minlength="3" maxlength="32" required autocomplete="off">
                <ul class="inputRequirements">
                    <li>Username should contain 3-32 characters</li>
                    <li>Must contain only letters and numbers</li>
                </ul>
            </label>

            <label for="name">
                <input type="text" onkeypress="validateLet(event)" placeholder="Name" name="name" id="name" minlength="1" maxlength="32" required autocomplete="off">
                <ul class="inputRequirements">
                    <li>Enter your real name</li>
                </ul>
            </label>

            <label for="surname">
                <input type="text" onkeypress="validateLet(event)" placeholder="Surname" name="surname" id="surname" minlength="1" maxlength="32" required autocomplete="off">
                <ul class="inputRequirements">
                    <li>Enter your real surname</li>
                </ul>
            </label>

            <label for="email">
                <input type="email" placeholder="E-mail" name="email" id="email" minlength="3" maxlength="32" required autocomplete="off">
                <ul class="inputRequirements">
                    <li>Example: mail@mail.com</li>
                </ul>
            </label>

            <label>
                <input type="text" onkeypress="validate(event)" placeholder="UIN" name="uin" id="uin" minlength="12" maxlength="12" required autocomplete="off">
                <ul class="inputRequirements">
                    <li>Uin should contain 12 numbers</li>
                </ul>
            </label>

            <label>
                <input type="password" placeholder="Password" name="pass" id="pass" minlength="3" maxlength="32" required autocomplete="off">
                <ul class="inputRequirements">
                    <li>Password should contain 3-32 characters</li>
                </ul>
            </label>

            <button class="loginButton" type="submit">Register</button>
        </form>
    </section>
</section>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/validatorRegistration.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }

    function validateLet(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[a-zA-zа-яА-Я]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }

</script>
</body>
</html>
