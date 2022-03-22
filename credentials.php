<?php

session_start();

if (isset($_POST["registro"])) {

    if ($mysqli->connect_errno) {
        /* ERROR DE CONEXIÓN */
        echo "Connection failed " . $mysqli->connect_error;
        exit();
    } else {
        /* GUARDAMOS TODAS LAS CREDENCIALES DEL REGISTRO EN
        VARIABLES MEDIANTE POST */
        $nombre = $_POST["name"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $email_conf = $_POST["email_conf"];
        $passwd_conf = $_POST["passwd_conf"];
        $passwd = $_POST["passwd"];
        $fech_nac = $_POST["fech_nac"];
        $mysqli = new mysqli("localhost", "root", "", "PROYECTO_TRANSVERSAL");

        /* PATTERNS */
        /* GUARDAMOS TODOS LOS PATTERNS EN VARIABLES PARA QUE EL CÓDIGO NO SEA TAN ENGORROSO */
        $name_pattern = "/^[a-zA-z]*$/";
        $name_lenght = strlen($nombre);
        $email_pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $passwd_pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}";

        /* REALIZAMOS TODAS LAS COMPARACIONES */
        if (!preg_match($name_pattern, $nombre)) {
            $ErrMsg = "Only alphabets and whitespace are allowed.";
            echo $ErrMsg;
        } else if ($name_lenght > 15) {
            $ErrMsg = "Only a name with a maximum of 15 characters lenght is allowed.";
            echo $ErrMsg;
        } else if ($email != $email_conf) {
            $ErrMsg = "Emails are different.";
            echo $ErrMsg;
        }  else if ($passwd != $passwd_conf) {
            $ErrMsg = "Passwords are different.";
            echo $ErrMsg;
        } else if ($email == $email_conf && $passwd == $passwd_conf) {
            /* SI LA CONTRASEÑA DE CONFIRMACIÓN Y LA CONTRASEÑA SON CORRECTAS
            (LO MISMO CON EL EMAIL) HAREMOS EL INSERT PARA INTRODUCIR ESOS 
            DATOS EN LA BASE DE DATOS DEL PROYECTO */
            $sql = "INSERT INTO USUARIO(nombre_user, apellidos, email, passwd, fech_nac) VALUES ('$nombre', '$apellidos', '$email', '$passwd', '$fech_nac DATE_FORMAT(%d-%m-%Y)')";
            $inserted = $mysqli->query($sql);
            if ($inserted) {
                /* SI TODOS LOS CAMPOS CUMPLEN CON LOS REQUISITOS 
                SALTA EL POP-UP */
                echo '<script type="text/javascript">
            alert("¡Usuario registrado con éxito!");
            window.location.href="login.php";
            </script>';
            }
        }
    }
}

if (isset($_POST['entrada'])) {
    /* PARA HACER EL INICIO DE SESIÓN HAREMO SEL POST DEL
    EMAIL Y DE LA CONTRASÑA */
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $mysqli = new mysqli("localhost", "root", "", "PROYECTO_TRANSVERSAL");

    if ($mysqli->connect_errno) {
        /* ERROR DE CONEXIÓN */
        echo "Connection failed " . $mysqli->connect_error;
        exit();
    } else {
        /* GUARDAMOS LAS QUERYS REALIZADAS EN LA BASE DE DATOS EN VARIABLES */
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND passwd = '$passwd'";
        $user = "SELECT nombre_user FROM usuario WHERE email = '$email'";
        
        /* GUARDAMOS LOS RESULTADOS DE LAS QUERYS EN VARIABLES */
        $entrada = $mysqli->query($sql);
        $result = $mysqli->query($user);
        $queryRol = "SELECT rol FROM usuario WHERE email = '$email'";
        $resultRol = $mysqli->query($queryRol);
        /* HACEMOS EL FETCH ASSOC PARA SACAR EL VECTOR DEL ROL */
        $rol = $resultRol -> fetch_assoc();
        /* GUARDAMOS EN UNA VARIABLE LA POSICIÓN DEL VECTOR */
        $vectorRol = $rol['rol'];

        /* COMPROBAMOS QUE LAS CREDENCIALES INTRODUCIDAS SEAN CORRECTAS */
        if (sizeof($entrada->fetch_all()) > 0) {
            /* SI HA INICIADO SESIÓN COMO CLIENTE LE LLEVARÁ AL INICIO */
            if ($vectorRol == 'cliente'){
                header("location:inicio.php");
            }
            else if ($vectorRol == 'admin'){
                /* EN CAMBIO SI INICIA SESIÓN CON EL USUARIO QUE TIENE EL ROL DE ADMIN
                SE LE REDIRIGIRÁ A UNA PÁGINA QUE AÚN ESTÁ EN PROCESO */
                header("location:https://i.ytimg.com/vi/MUK8jRQhHD8/hqdefault.jpg");
            }
            /* SI LAS CREDENCIALES SON INCORRECTAS SALTA EL POP-UP */
        } else {
            echo '<script type="text/javascript">
            alert("Usuario erroneo");
            window.location.href="login.php";
            </script>';
        }

        /* CREAMOS LA VARIABLE DE SESIÓN PARA MANTENER AL USUARIO QUE HA INICIADO SESIÓN
        EN LAS DISTINTAS PÁGINAS */
        while ($row = $result->fetch_assoc()) {
            $_SESSION["persona"] = $row['nombre_user'];
        }
    }
}

if (isset($_POST['salida'])) {
    echo '<script type="text/javascript">
          alert("¡Hasta la próxima!");
          window.location.href="login.php";
          </script>';
    session_destroy();
  }
?>