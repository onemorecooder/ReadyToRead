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
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="stylesheet" href="CSS/login_js.css">
    <link rel="icon" type="image/png" href="Imagenes/Logo/logo_small_icon_only.png" sizes="96x96">
    <title>RTR | Register now</title>
</head>

<body>
    <form id="signup_form" method="POST" action="credentials.php">
        <div>
            <img id="logo" src="Imagenes/Logo/logo.png" alt="">
            <hr>
            <h2>SIGN UP</h2>
            <hr>

            <p>Name</p>
            <p><input name="name" type="text"  style="text-transform: capitalize;" required pattern="[A-Za-z].{2,}$"></p>

            <p>Surname</p>
            <p><input name="surname" type="text"  style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$" required></p>

            <p>Date of Birth</p>
            <p><input name="fech_nac" type="date" max="2010-01-01"></p>

            <p>Email</p>
            <p><input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></p>
            <p>Repeat your email</p>
            <p><input name="email_conf" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></p>

            <p>Password</p>
            <p></label><input name="passwd" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$&+,:;=?@#|'<>.^*()%!-]).{8,}$" required></p>
            <p>Repeat your password</p>
            <p></label><input name="passwd_conf" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$&+,:;=?@#|'<>.^*()%!-]).{8,}$" required></p>

            <p><input type="checkbox" required> I accept <a class="textFooter" href="#">the terms of use</a><br>
                and our <a class="textFooter" href="#">privacy policy</a></p>

            <p><input name="registro" class="button" type="submit" value="REGISTER"></p>
            <p class="link"><a class="textFooter" href="login.php">Are you already registered?</a></p><br>
        </div>
    </form>
    <footer>
        <p><b>Ready to Read &copy; 2022</b></p>
    </footer>


</body>

</html>