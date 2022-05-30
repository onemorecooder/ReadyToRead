<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/additional-methods.min.js"></script>
    <!-- <script src="JS/signup.js"></script> !-->
     <script src="JS/modify.js"></script> 
    <link rel="stylesheet" href="CSS/modify.css">
    <link rel="stylesheet" href="CSS/login_js.css">
    <link rel="icon" type="image/png" href="Imagenes/Logo/logo_small_icon_only.png" sizes="96x96">
    <title>RTR | MODIFY</title>
</head>

<body>

    <form id="modify_form" method="POST" action="bbddmodify.php">
    <?php 
        //conexion
        $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        //CUIDADO CON LA CONTRASEÑA
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
        session_start();
        //seleccionamos al usuario por el nombre
        //$_SESSION["persona"] = "Alejandro";
        $nombre_user = $_SESSION["persona"];

        $query = $dbh -> prepare("SELECT * FROM usuario WHERE nombre_user = '$nombre_user';");
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){
            // usaremos el foreach para mostrar resultados
            foreach($results as $result) {?>
        <div>
            <img id="logo" src="Imagenes/Logo/logo.png" alt="Logo de Ready To Read">
            <hr>
            <h2>MODIFY</h2> <p class="link"><a class="textFooter" href="perfil.php">Perfil</a></p><br>
            <hr>
            <!-- MENSAJE DE ERROR !-->
            <h4></h4>
            <!-- PRIMERO MOSTRAR LOS DATOS DE CADA CAMPO DE INFORMACIÓN ACTUAL / EJEMPLO TWITTER !--> 
            <h3>Account Information:</h3>

            <!-- NAME !-->
            <p class="p_black">Name:</p>
            <p><input name="name" type="text"  style="text-transform: capitalize;" placeholder="<?php echo $result -> nombre_user; ?>"></p>

            <p class="p_black">Surname:</p>
            <p><input name="surname" type="text"  style="text-transform: capitalize;" placeholder="<?php echo $result -> apellidos; ?>"></p>
            <!-- BIRTH !-->
            <p class="p_black">Date of Birth:</p>
            <p><input name="fecha_nac" type="date" max="2010-01-01" placeholder="<?php echo $result -> fech_nac; ?>"></p>

            <!-- MAIL !-->
            <p class="p_black">Email:</p>
            <p><input name="email" type="email" value="<?php echo  $result -> email;  ?>" disabled></p>
            
            <p><input name="modify" class="button" type="submit" value="SAVE"></p>
            <p class="link"><a class="textFooter" href="soporte1.php">Is something wrong?</a></p><br>
        </div>
         <!-- FIN DEL WHILE E IF! --> 
         <?php }} ?>
    </form>
    
    <footer>
        <ul>
            <li><b>Ready to Read &copy; 2022</b></li>
            <li><a class="textFooter" href="#">About Us</a></li>
            <li><a class="textFooter" href="#">Contact</a></li>
            <li><a class="textFooter" href="soporte1.php">Support</a></li>
        </ul>
    </footer>
</body>

</html>