<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/ajax.js" defer></script>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/jquery.validate.js"></script>
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/login.js"></script>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/login_js.css">
    <link rel="icon" type="image/png" href="Imagenes/Logo/logo_small_icon_only.png" sizes="96x96">
    <title>RIIR | Login</title>
</head>

<body>
    <div class="popup-overlay">
        <div class="popup">
            <img src="Imagenes/Logo/logo_large.png" style="width: 50%; height: 50%;" alt="">
            <p>If you select "close" a cookie will be created for one minute. <br>If "submit" is selected a cookie will be set for 5 minutes.</p>
            <a href="javascript:;" class="close">Close</a>
            <a href="javascript:;" class="submit">Submit</a>
        </div>
    </div>

    <form id="second_form" method="post" action="">
        <div>
            <div class="alert"><label style="display: none;"></label></div>
        
            <img id="logo" src="Imagenes/Logo/logo.png" alt="Logo de ReadyToRead">
            <hr>
            <h2>LOGIN</h2>
            <hr><br>
            <label for="email">Email:</label><br>
            <input id="em" type="email" name="email"></input><br><br>
            <!-- NO VENGAS AQUÍ SI CREES QUE VAS A ENCONTRAR LOS MENSAJES DE ERROR, ESTÁN EN EL JS -->
            <label for="passwd">Password:</label><br>
            <input id="ps" type="password" name="passwd"></input><br><br>
            <!--  NO VENGAS AQUÍ SI CREES QUE VAS A ENCONTRAR LOS MENSAJES DE ERROR, ESTÁN EN EL JS  -->
            <input type="submit" value="Submit" name="entrada" class="button">

            <p><input type="checkbox"> Keep the session logged in</p>

            <p class="link"><a class="textFooter" href="signup.php" title="Pantalla de Login">You're not registered?</a></p>
            <p class="link"><a class="textFooter" href="signup.php" title="Pantalla de Registro">Did you forgot your password?</a></p>
        </div>
    </form>
    <footer>
        <p><b>Ready to Read &copy; 2022</b></p>
    </footer>

</body>

</html>