<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/additional-methods.min.js"></script>
    <script src="JS/login.js"></script>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/login_js.css">
    <title>RTR | Login</title>
</head>

<body>

    <form id="second_form" method="post" action="credentials.php">
        <div>
            <img id="logo" src="LOGO2/logo_large.png" alt="Logo de ReadyToRead">
            <hr>
            <h2>LOGIN</h2>
            <hr><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email"></input><br><br>
            <!-- NO VENGAS AQUÍ SI CREES QUE VAS A ENCONTRAR LOS MENSAJES DE ERROR, ESTÁN EN EL JS -->
            <label for="passwd">Password:</label><br>
            <input type="password" name="passwd"></input><br><br>
            <!--  NO VENGAS AQUÍ SI CREES QUE VAS A ENCONTRAR LOS MENSAJES DE ERROR, ESTÁN EN EL JS  -->
            <input type="submit" value="Submit" name="entrada" class="button">

            <p><input type="checkbox"> Keep the session logged in</p>

            <p class="link"><a class="textFooter" href="signup.php" title="Pantalla de Login">You're not registered?</a></p>
            <p class="link"><a class="textFooter" href="registro.php" title="Pantalla de Registro">Did you forgot your password?</a></p>
        </div>
    </form>

    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/additional-methods.min.js"></script>
    <script src="JS/login.js"></script>

    <footer>
        <ul>
            <li><b>Ready to Read &copy; 2022</b></li>
            <li><a class="textFooter" href="#" title="Pantalla sobre ReadyToRead">About Us</a></li>
            <li><a class="textFooter" href="#" title="Pantalla de contacto de ReadyToRead">Contact</a></li>
            <li><a class="textFooter" href="soporte1.html" title="Pantalla de soporte">Support</a></li>
        </ul>
    </footer>

</body>

</html>