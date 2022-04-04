<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/slick.css">
  </link>
  <link rel="stylesheet" href="CSS/aboutUs.css">
  <link rel="stylesheet" href="CSS/contact.css">
  <link rel="stylesheet" href="CSS/home_slider.css">
  <link rel="stylesheet" href="CSS/inicio.css">

  <script src="JS/jquery-3.6.0.min.js"></script>
  <script src="JS/slick.js"></script>
  <script src="JS/slider_home.js" defer></script>
  <title>Contact</title>
</head>

<body>
  <header>
    <div id="cabezal">
      <img id="logo" src="LOGO1/logo_large.png" alt="Logo de Ready To Read">
      <p> | Contact</p>
    </div>
    <div class="userInicio">
      <p id="userNameInicio">Dear <?php session_start();
                                  echo $_SESSION["persona"]; ?></p>
    </div>
    <div id="logout">
      <form method="POST" action="credentials.php"><input name="salida" class="button" type="submit" value="LOGOUT"></form>
    </div>
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

  <div class="container">
    <div style="text-align:center">
      <h2>Contact Us</h2>
      <p>Swing by for a book, or leave us a message:</p>
    </div>
    <hr>
    <div class="row">
      <div class="column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.464138338133!2d2.162991615264042!3d41.385725679264354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f4a81c8763%3A0x37ea3955a98b102a!2sSTUCOM%20Centre%20d&#39;Estudis!5e0!3m2!1ses!2ses!4v1648547213147!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="column">
        <form action="/action_page.php">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name...">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name...">
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Spain</option>
            <option value="canada">United Kigndom</option>
            <option value="usa">France</option>
          </select>
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px; resize:none"></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
    <hr>

  <div class="container">
          <h2 style="text-align: center;">Contact Information</h2>
          <div class="row">
          <div class="column">
          <p style="text-align: right;">E-mail: <b>Ready@ToRead.org</b></p>
          </div>
          <div class="column">
          <a class="social_media" href=""><img src="/icons/social_media/linkedin.png" alt="linkedin" style="width: 40px; height: 40px;"></a>
                <a class="social_media" href=""><img src="/icons/social_media/twitter.png" alt="twitter" style="width: 40px; height: 40px;"></a>
                <a class="social_media" href=""><img src="/icons/social_media/instagram.png" alt="github" style="width: 40px; height: 40px;"></a>
                <a class="social_media" href=""><img src="/icons/social_media/github.png" alt="github" style="width: 40px; height: 40px;"></a>
          </div>
          </div> 
  </div>
  <hr>
  </div>

  

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