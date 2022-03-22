<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/amigos.css">
    <title>RTR | Friends</title>
</head>

<body>
    <!-- INICIO CABECERA -->
    <header>
        <div id="cabezal">
            <img id="logo" src="LOGO1/logo_large.png" alt="Logo de ReadyToRead">
            <p> | Friends</p>
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
        <h1 id="pageName">Friends</h1>

        <div id="generalContent">
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>SuperLector3000</h2>
                <p>Coleccionist</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>ElMasLindoDelBarrio</h2>
                <p>Veteran</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>FlipYourself</h2>
                <p>Nocturnal Owl</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>QuijoteConCapote</h2>
                <p>Old Reader</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>TolkienToltu</h2>
                <p>Maratonian</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>OcampoVerde</h2>
                <p>Multilingual</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>QuevedoSinDedo</h2>
                <p>Multilingual</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>ElBekerr</h2>
                <p>Veteran</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
            </div>
            <hr>
            <div>
                <img class="book" src="icons/user.png" alt="Imagen de perfil de usuario">
                <h2>NerudaBarbuda</h2>
                <p>Daily reader</p>
                <p><a class="verBiblio" href="libros.html" title="Link hacia la pantalla de libros">See Library</a></p>
                <img class="menu" src="icons/msg.png" alt="Imagen de correo">
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