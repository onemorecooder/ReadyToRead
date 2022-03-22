<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/libros.css">
    <title>RTR | Library</title>
</head>

<body>
    <!-- INICIO CABECERA -->
    <header>
        <div id="cabezal">
            <img id="logo" src="LOGO1/logo_large.png" alt="Logo de ReadyToRead">
            <p> | Library</p>
        </div>
        <div id="barraMenuMovil">
            <img id="atras" src="icons/atras.png" alt="Botón hacia atras">
            <input id="barraBusqueda" type="text">
            <img id="lupa" src="icons/lupa.png" alt="Imagen de Lupa">
            <img class="menu" src="icons/menu.png" alt="Botón de Menu">
        </div>
        <div id="user">
            <img class="user_pic" src="icons/user.png" alt="Imagen de perfil de usuario">
            <p id="userName"><?php session_start(); echo $_SESSION["persona"]; ?></p>
        </div>
        <div id="barraMenu">
            <ul id="ejm4">
                <li><a href="inicio.php" title="Home">Home</a></li>
                <li><a href="perfil.php" title="Profile">Profile</a></li>
                <li><a href="libros.php" title="Library">Library</a></li>
                <li><a href="#" title="Forum">Forum</a></li>
                <li><a href="soporte1.html" title="Support">Support</a></li>
            </ul>
        </div>
    </header>
    <!-- FIN CABECERA -->


    <!-- CONTENIDO PÁGINA -->
    <div>
        <!-- NOMBRE SECCIÓN PÁGINA -->
        <h1 id="pageName">Books</h1>

        <div id="generalContent">
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>Name of the Wind</h2>
                <p>Patrick Rothfuss</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>In Search of Lost Time</h2>
                <p>Marcel Proust</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>Ulysses</h2>
                <p>James Joyce</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>Don Quijote</h2>
                <p>Miguel de Cervantes</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>One Hundred Years of Solitude</h2>
                <p>PGabriel Garcia Marquez</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>The Great Gatsby</h2>
                <p>F. Scott Fitzgerald</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>Moby Dick</h2>
                <p>Herman Melville</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>War and Peace</h2>
                <p>Leo Tolstoy</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/book.png" alt="Imagen de un libro">
                <h2>Hamlet</h2>
                <p>William Shakespeare</p>
                <img id="star" src="icons/star.png" alt="Valoracion del libro con estrellas">
                <img class="menu" src="icons/menu.png" alt="Botón del Menu">
            </div>
        </div>
    </div>
    <!-- FIN CONTENIDO PÁGINA -->

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