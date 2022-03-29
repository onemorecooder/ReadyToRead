<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/perfil.css">
    <title>RTR | Profile</title>
</head>

<body>
    <!-- INICIO CABECERA -->
    <header>
        <div id="cabezal">
            <img id="logo" src="LOGO1/logo_large.png" alt="">
            <p> | Profile</p>
        </div>
        <div id="user">
            <img class="user_pic" src="icons/user.png" alt="">
            <p id="userName"><?php session_start(); echo $_SESSION["persona"]; ?></p>
        </div>
        <div id="logout"><form method="POST" action="credentials.php"><input name="salida" class="button" type="submit" value="LOGOUT"></form></div>
        <div id="barraMenu">
            <ul id="ejm4">
                <li><a href="inicio.php" title="Home">Home</a></li>
                <li><a href="perfil.php" title="Profile">Profile</a></li>
                <li><a href="libros.php" title="Library">Library</a></li>
                <li><a href="aboutUs.html" title="About Us">About Us</a></li>
                <li><a href="soporte1.php" title="Support">Support</a></li>
            </ul>
        </div>
    </header>
    <!-- FIN CABECERA -->


    <!-- CONTENIDO PÁGINA -->
    <div>
        <!-- NOMBRE SECCIÓN PÁGINA -->
        <div id="pageNameConButton">
            <h1>Books</h1>
            <a href="libros.php" class="goTo"><img src="icons/goTo.png" alt=""></a>
        </div>

        <div id="generalContent">
            <div>
                <img class="book" src="icons/book.png" alt="">
                <h2>Name of the Wind</h2>
                <p>Patrick Rothfuss</p>
                <img id="star" src="icons/star.png" alt="">
                <p><a class="verBiblio" href="libros.php">See Book</a></p>
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="">
                <h2>In Search of Lost Time</h2>
                <p>Marcel Proust</p>
                <img id="star" src="icons/star.png" alt="">
                <p><a class="verBiblio" href="libros.php">See Book</a></p>
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="">
                <h2>Ulysses</h2>
                <p>James Joyce</p>
                <img id="star" src="icons/star.png" alt="">
                <p><a class="verBiblio" href="libros.php">See Book</a></p>
            </div>
        </div>

        <div id="pageNameConButton">
            <h1>Trophys</h1>
            <a href="#" class="goTo"><img src="icons/goTo.png" alt=""></a>
        </div>

        <div id="generalContentTrofeos">
            <div class="cartaTrofeo">
                <div class="cartaTrofeo-General">
                    <div class="cartaTrofeo-Frontal">
                        <img src="icons/trofeo.png" alt="">
                        <p>Veteran</p>
                    </div>
                    <div class="cartaTrofeo-Trasera">
                        <h2>Veteran</h2>
                        <hr>
                        <p class="textoTrofeo">You have been with us for more than 2 months.</p>
                    </div>
                </div>
            </div>
            <div class="cartaTrofeo">
                <div class="cartaTrofeo-General">
                    <div class="cartaTrofeo-Frontal">
                        <img src="icons/trofeo.png" alt="">
                        <p>Lector diario</p>
                    </div>
                    <div class="cartaTrofeo-Trasera">
                        <h2>Daily Reader</h2>
                        <hr>
                        <p class="textoTrofeo">You have added a book daily for one week.</p>
                    </div>
                </div>
            </div>
            <div class="cartaTrofeo">
                <div class="cartaTrofeo-General">
                    <div class="cartaTrofeo-Frontal">
                        <img src="icons/trofeo.png" alt="">
                        <p>Nocturnal Owl</p>
                    </div>
                    <div class="cartaTrofeo-Trasera">
                        <h2>Nocturnal Owl</h2>
                        <hr>
                        <p class="textoTrofeo">You have added a book late at night.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="pageNameConButton">
            <h1>Friends</h1>
            <a href="amigos.php" class="goTo"><img src="icons/goTo.png" alt=""></a>
        </div>

        <div id="generalContent">
            <div>
                <img class="book" src="icons/user.png" alt="">
                <h2>SuperLector3000</h2>
                <p>Coleccionist</p>
                <p><a class="verBiblio" href="libros.php">See Library</a></p>
                <img class="book" src="icons/msg.png" alt="">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="">
                <h2>ElMasLindoDelBarrio</h2>
                <p>Veteran</p>
                <p><a class="verBiblio" href="libros.php">See Library</a></p>
                <img class="book" src="icons/msg.png" alt="">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="">
                <h2>FlipYourself</h2>
                <p>Nocturnal Owl</p>
                <p><a class="verBiblio" href="libros.php">See Library</a></p>
                <img class="book" src="icons/msg.png" alt="">
            </div>
        </div>

    </div>
    <!-- FIN CONTENIDO PÁGINA -->

    <footer>
        <ul>
            <li><b>Ready to Read &copy; 2022</b></li>
            <li><a class="textFooter" href="aboutUs.html">About Us</a></li>
            <li><a class="textFooter" href="contact.php">Contact</a></li>
            <li><a class="textFooter" href="soporte1.php">Support</a></li>
        </ul>
    </footer>

</body>

</html>