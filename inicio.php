<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="CSS/slick.css">
  </link>
  <link rel="stylesheet" href="CSS/inicio.css">
  <link rel="stylesheet" href="CSS/home_slider.css">

  <script src="JS/jquery-3.6.0.min.js"></script>
  <script src="JS/slick.js"></script>
  <script src="JS/slider_home.js" defer></script>



  <title>RTR | Home</title>
</head>

<body>
  <!-- INICIO CABECERA -->
  <header>
    <div id="cabezal">
      <img id="logo" src="LOGO1/logo_large.png" alt="Logo de Ready To Read">
      <p> | Home</p>
    </div>
    <div class="userInicio">
      <p id="userNameInicio">Welcome, <?php session_start();
                                      echo $_SESSION["persona"]; ?></p>
    </div>
    <div id="logout">
      <form method="POST" action="credentials.php"><input name="salida" class="button" type="submit" value="LOGOUT"></form>
    </div>
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
  <br><br>
  <div class="slider fade">
    <div>
      <p class="librosDestacados">Did you know?</p>
      <p class="textBooks">The world's best-selling novel is Don Quijote
        by Miguel de Cervantes, which has sold more than 500 million
        copies. The world's best-selling book is The Bible.</p>
    </div>

    <div>
      <img src="imagenes-libros/escrito.jpg" />
    </div>

    <div>
      <img src="imagenes-libros/silent-things.png" />
    </div>

    <div>
      <img src="imagenes-libros/mistborn.jpg" />
    </div>

    <div>
      <p class="librosDestacados">Did you know?</p>
      <p class="textBooks">The world's most expensive book is a copy
        of Leonardo DaVinci's Codex Leicester. It fetched $30.8 million,
        and the lucky buyer was Bill Gates in 1994.</p>
    </div>

    <div>
      <img src="imagenes-libros/mistborn2.jpg" />
    </div>
    <div>
      <img src="imagenes-libros/name-wind.jpg" />
    </div>
  </div>

  <!--
  <div class="carrousel">
    <div>
      <p id="librosDestacados">Greattest Books</p>
      <p id="textBooks">Find here the most ratted books of the moment!</p>
      <div id="divRecomended">
        <img id="recomended" src="icons/recomendedBooks.png" alt="Imagen de una mano">
      </div>
    </div>
-->
  <div class="carrouselEscritores">
    <img src="imagenes-escritores/Brandon-Sanderson.png" alt="Foto de Brandon Sanderson" class="picEscritor">
    <img src="imagenes-escritores/Patrick-Rothfuss.jpg" alt="Foto de Patrick Rothfuss" class="picEscritor">
    <img src="imagenes-escritores/paula-hawkins.jpg" alt="Foto de Paula Hawkins" class="picEscritor">
    <img src="imagenes-escritores/terry-pratchet.jpg" alt="Foto de Terry Pratchet" class="picEscritor">
    <img src="imagenes-escritores/tolkien.jpg" alt="Foto de Tolkien" class="picEscritor">
  </div>
  <!-- FIN CONTENIDO PÁGINA -->

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