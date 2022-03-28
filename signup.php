<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/signup.css">
    <title>RTR | Register now</title>
</head>

<body>
    <form method="POST" action="credentials.php">
        <div>
            <img id="logo" src="Imagenes/Logo/logo.png" alt="">
            <hr>
            <h2>SIGN UP</h2>
            <hr>

            <p>Name</p>
            <p><input name="name" type="text" required></p>

            <p>Surname</p>
            <p><input name="apellidos" type="text" pattern="[A-z ]+" required></p>

            <p>Date of Birth</p>
            <p><input name="fech_nac" type="date" max="2010-01-01"></p>

            <p>Email</p>
            <p><input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></p>
            <p>Repeat your email</p>
            <p><input name="email_conf" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></p>

            <p>Password</p>
            <p></label><input name="passwd" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe contener una mayúscula, números y un caracter especial" required></p>
            <p>Repeat your password</p>
            <p></label><input name="passwd_conf" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe contener una mayúscula, números y un caracter especial" required></p>

            <p><input type="checkbox" required> I accept <a class="textFooter" href="#">the terms of use</a><br>
                and our <a class="textFooter" href="#">privacy policy</a></p>

            <p><input name="registro" class="button" type="submit" value="REGISTRO"></p>
            <p class="link"><a class="textFooter" href="login.php">Are you already registered?</a></p><br>
        </div>
    </form>
    <footer>
        <ul>
            <li><b>Ready to Read &copy; 2022</b></li>
            <li><a class="textFooter" href="aboutUs.html">About Us</a></li>
            <li><a class="textFooter" href="#">Contact</a></li>
            <li><a class="textFooter" href="soporte1.php">Support</a></li>
        </ul>
    </footer>


</body>

</html>