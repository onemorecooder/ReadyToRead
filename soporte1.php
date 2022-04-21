<!DOCTYPE html>
<html>

<head>
    <title>RTR | Soporte </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/soporte1.css" rel="stylesheet" type="text/css" />
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/soporte.js" defer></script>
</head>

<body>
    <header>
        <div id="cabezal">
            <a href="/Proyecto Transversal/TERMINADO/inicio.html"><img id="logo" src="Imagenes/Logo/logo_large.png"></a>
            <p> | Sopport</p>
        </div>
        <div id="user">
            <img class="user_pic" src="icons/user.png" alt="">
            <p id="userName"><?php session_start();
                                echo $_SESSION["persona"]; ?></p>
        </div>
        <div id="barraMenuMovil">
            <img id="atras" src="icons/atras.png" alt="Botón hacia atras">
            <input id="barraBusqueda" type="text">
            <img id="lupa" src="icons/lupa.png" alt="Imagen de Lupa">
            <img class="menu" src="icons/menu.png" alt="Botón de Menu">
        </div>
        <div id="barraMenu">
            <ul id="ejm4">
                <li><a href="inicio.php" title="Home">Home</a></li>
                <li><a href="perfil.php" title="Profile">Profile</a></li>
                <li><a href="inicio.php" title="Library">Library</a></li>
                <li><a href="aboutUs.html" title="About Us">About Us</a></li>
                <li><a href="soporte1.php" title="Support">Support</a></li>
            </ul>
        </div>
    </header>
    <section>
        <div>
            <label>SUPPORT CENTER</label>
        </div>
        <div class="consultsop">
            <label>About my account</label>
        </div>
        <div class="consults">
            <div>
                <label>How do I add a book to my library?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Click on the book you want to add to your library, once you have selected the book,
                    on the right hand side of the page there will be a + button to add, click on it.
                </label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How do I delete a book from my library?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Redirect to the Library of books that is stored in your profile, in each book block,
                    you will see three dots, click on it and select the "Remove from my library" option.
                </label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How can I share a book?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Redirect to the Book Library that is stored in your profile, in each book block,
                    you will see three dots, click on it and select the "Share" option.
                </label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>
                    How can I view my books so that I can see the books from oldest to newest?
                </label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente cumque veritatis
                    dolore, placeat asperiores qui nesciunt quidem obcaecati, porro deleniti facere, nihil fugiat sunt.
                </label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How can I see my friends?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In exercitationem
                    atque qui eveniet ipsum porro beatae fugiat! Nostrum autem aperiam beatae voluptate,
                    error a consequatur perspiciatis? Odit voluptatum explicabo, quisquam odio non nobis
                    pariatur minus!
                </label>
            </div>
        </div>
    </section>
    <section>
        <div class="consultsop">
            <label>Community & Friends</label>
        </div>
        <div class="consults">
            <div>
                <label>How does the friends chat work?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vitae ullam, mollitia
                    consequatur dolorum doloribus magni maxime sed deleniti debitis facilis placeat.
                    Recusandae provident doloribus expedita fugiat saepe minus dolor dignissimos veniam
                    quam officiis nesciunt ab, amet delectus ipsa perspiciatis ipsam fugit sed non, et
                    eligendi dolorem placeat ducimus assumenda?
                </label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How do I join a community group?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How can I make a review?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis perferendis
                    sapiente natus. Debitis optio obcaecati commodi nobis, consequuntur, doloremque modi
                    nisi error officia reiciendis nostrum possimus? Debitis in, autem incidunt magnam quod
                    deleniti quis minus eaque, similique, natus quasi consequatur!</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How do I bookmark a review?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>ur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>Is there a limit to the number of people who can participate in a group?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
    </section>
    <section>
        <div class="consultsop">
            <label>Books & Artists</label>
        </div>
        <div class="consults">
            <div>
                <label>I am an author, can I make raffles?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>
                    Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum
                    veritatis ipsum esse omnis? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aut quaerat maiores vero aspernatur nostrum, nemo illo cum similique minima minus.</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How do I get the copyright?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>I can't find the book I'm looking for, what can I do?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium
                    nostrum veritatis ipsum esse omnis? Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Culpa rem velit tenetur facilis dolores quae cupiditate nobis
                    tempora nisi perferendis voluptas, libero, blanditiis beatae cum tempore impedit.
                    Atque, est consectetur.</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>Manual of books</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>Why can't I see the available raffles?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
    </section>
    <section>
        <div class="consultsop">
            <label>Security & Privacy</label>
        </div>
        <div class="consults">
            <div>
                <label>Set my account to private</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>Deactivate my account temporarily</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>Delete my account permanently</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>How can I be sure that my data will not be confiscated?</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
        <div class="consults">
            <div>
                <label>Licence</label>
            </div>
            <div class="downarrow">
                <img src="Imagenes/Botones/flecha_desplegable.png" alt="Imagen de para desplegar">
            </div>
            <div class="feedback">
                <label>Lorem psum dolor sit amet consectetur adipisicing elit. Quo praesentium nostrum veritatis ipsum esse omnis?</label>
            </div>
        </div>
    </section>
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