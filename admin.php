<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/additional-methods.min.js"></script>
    <script src="JS/signup.js"></script>
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="CSS/login_js.css">
    <link rel="stylesheet" href="CSS/inicio.css">
    <title>RTR | Author register</title>
</head>

<body>
    <header>
        <div class="userInicio">
            <p id="userNameInicio">Welcome, <?php session_start();
                                            echo $_SESSION["persona"]; ?></p>
            <div id="logout">
                <form method="POST" action="credentials.php"><input name="salida" class="button" type="submit" value="LOGOUT"></form><br>
            </div>
        </div>
    </header>
    <br>
    <form id="signup_form" method="POST" action="credentials.php">

        <div id="myGrid">
            <div>
                <h1>Add authors:</h1>
                <p>Name:</p>
                <p><input name="name" type="text" style="text-transform: capitalize;" required pattern="[A-Za-z].{2,}$"></p>

                <p>Surname:</p>
                <p><input name="surname" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$" required></p>

                <p>Lastname:</p>
                <p><input name="surname" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$" required></p>

                <p>Date of Birth</p>
                <p><input name="fech_nac" type="date" max="2010-01-01"></p><br>

                <input type="submit">
            </div>
            <div>
                <h1>Modify authors:</h1>
                <p>Select the author you want to modify:</p>
                <select name="authors">
                    <option>Author 1</option>
                    <option>Author 2</option>
                    <option>Author 3</option>
                </select><br>
                <br><input type="submit">
                <div>
                    <h1>Author selected:</h1>
                    <p>Author1 selected</p>
                    <p>Name:</p>
                    <p><input name="name" type="text" style="text-transform: capitalize;" required pattern="[A-Za-z].{2,}$"></p>
                    <input type="submit">
                </div>
            </div>
        </div>
    </form>

    <footer>
        <ul>
            <li><b>Ready to Read &copy; 2022</b></li>
            <li><a class="textFooter" href="aboutUs.html" title="Pantalla sobre ReadyToRead">About Us</a></li>
            <li><a class="textFooter" href="contact.php" title="Pantalla de contacto de ReadyToRead">Contact</a></li>
            <li><a class="textFooter" href="soporte1.php" title="Pantalla de soporte">Support</a></li>
        </ul>
    </footer>
</body>

</html>

<?php



?>