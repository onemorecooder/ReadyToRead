<?php
/* session_start();

 if (isset($_POST["registro"])) {

    if ($mysqli->connect_errno) {
        //ERROR DE CONEXIÓN
        echo "Connection failed " . $mysqli->connect_error;
        exit();
    } else {
        //GUARDAMOS TODAS LAS CREDENCIALES DEL REGISTRO EN
        //VARIABLES MEDIANTE POST 
        $nombre = $_POST["name"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $email_conf = $_POST["email_conf"];
        $passwd_conf = $_POST["passwd_conf"];
        $passwd = $_POST["passwd"];
        $fech_nac = $_POST["fech_nac"];
        $mysqli = new mysqli("localhost", "root", "", "PROYECTO_TRANSVERSAL");

        // PATTERNS
        // GUARDAMOS TODOS LOS PATTERNS EN VARIABLES PARA QUE EL CÓDIGO NO SEA TAN ENGORROSO
        $name_pattern = "/^[a-zA-z]*$/";
        $name_lenght = strlen($nombre);
        $email_pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $passwd_pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}";

        // REALIZAMOS TODAS LAS COMPARACIONES
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
            // SI LA CONTRASEÑA DE CONFIRMACIÓN Y LA CONTRASEÑA SON CORRECTAS
            //(LO MISMO CON EL EMAIL) HAREMOS EL INSERT PARA INTRODUCIR ESOS 
            //DATOS EN LA BASE DE DATOS DEL PROYECTO
            $sql = "INSERT INTO USUARIO(nombre_user, apellidos, email, passwd, fech_nac) VALUES ('$nombre', '$apellidos', '$email', '$passwd', '$fech_nac DATE_FORMAT(%d-%m-%Y)')";
            $inserted = $mysqli->query($sql);
            if ($inserted) {
                // SI TODOS LOS CAMPOS CUMPLEN CON LOS REQUISITOS 
                //SALTA EL POP-UP
                echo '<script type="text/javascript">
            alert("¡Usuario registrado con éxito!");
            window.location.href="login.php";
            </script>';
            }
        }
    }
}

if (isset($_POST['entrada'])) {
    // PARA HACER EL INICIO DE SESIÓN HAREMO SEL POST DEL
    //EMAIL Y DE LA CONTRASÑA 
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $mysqli = new mysqli("localhost", "root", "", "PROYECTO_TRANSVERSAL");

    if ($mysqli->connect_errno) {
        // ERROR DE CONEXIÓN
        echo "Connection failed " . $mysqli->connect_error;
        exit();
    } else {
        // GUARDAMOS LAS QUERYS REALIZADAS EN LA BASE DE DATOS EN VARIABLES
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND passwd = '$passwd'";
        $user = "SELECT nombre_user FROM usuario WHERE email = '$email'";

        // GUARDAMOS LOS RESULTADOS DE LAS QUERYS EN VARIABLES
        $entrada = $mysqli->query($sql);
        $result = $mysqli->query($user);
        $queryRol = "SELECT rol FROM usuario WHERE email = '$email'";
        $resultRol = $mysqli->query($queryRol);
        // HACEMOS EL FETCH ASSOC PARA SACAR EL VECTOR DEL ROL
        $rol = $resultRol->fetch_assoc();
        // GUARDAMOS EN UNA VARIABLE LA POSICIÓN DEL VECTOR
        $vectorRol = $rol['rol'];

        // COMPROBAMOS QUE LAS CREDENCIALES INTRODUCIDAS SEAN CORRECTAS
        if (sizeof($entrada->fetch_all()) > 0) {
            // SI HA INICIADO SESIÓN COMO CLIENTE LE LLEVARÁ AL INICIO
            if ($vectorRol == 'cliente') {
                header("location:inicio.php");
            } else if ($vectorRol == 'admin') {
                // EN CAMBIO SI INICIA SESIÓN CON EL USUARIO QUE TIENE EL ROL DE ADMIN
                //SE LE REDIRIGIRÁ A UNA PÁGINA QUE AÚN ESTÁ EN PROCESO
                header("location:admin.php");
            }
            // SI LAS CREDENCIALES SON INCORRECTAS SALTA EL POP-UP
        } else {
            echo '<script type="text/javascript">
            alert("Usuario erroneo");
            window.location.href="login.php";
            </script>';
        }

        // CREAMOS LA VARIABLE DE SESIÓN PARA MANTENER AL USUARIO QUE HA INICIADO SESIÓN
        //EN LAS DISTINTAS PÁGINAS
        while ($row = $result->fetch_assoc()) {
            $_SESSION["persona"] = $row['nombre_user'];
        }
    }
}

*/
?>

<?php

session_start();

if (isset($_POST["registro"])) {
    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $nombre = $_POST["name"];
    $apellidos = $_POST["surname"];
    $email = $_POST["email"];
    $email_conf = $_POST["email_conf"];
    $passwd_conf = $_POST["passwd_conf"];
    $passwd = $_POST["passwd"];
    $fech_nac = $_POST["fech_nac"];

    $name_pattern = "/^[a-zA-z]*$/";
    $name_lenght = strlen($nombre);
    $email_pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $passwd_pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}";

    /* REALIZAMOS TODAS LAS COMPARACIONES */
    if (!preg_match($name_pattern, $nombre)) {
        echo '<script type="text/javascript">
        alert("Only alphabets and whitespace are allowed.");
        window.location.href="signup.php";
        </script>';
        //$ErrMsg = "Only alphabets and whitespace are allowed.";
    } else if ($name_lenght > 15) {
        echo '<script type="text/javascript">
        alert("Only a name with a maximum of 15 characters lenght is allowed.");
        window.location.href="signup.php";
        </script>';
        //$ErrMsg = "Only a name with a maximum of 15 characters lenght is allowed.";
        //echo $ErrMsg;
    } else if ($email != $email_conf) {
        echo '<script type="text/javascript">
        alert("Emails are different.");
        window.location.href="signup.php";
        </script>';
        //$ErrMsg = "Emails are different.";
        //echo $ErrMsg;
    } else if ($passwd != $passwd_conf) {
        echo '<script type="text/javascript">
        alert("Passwords are different.");
        window.location.href="signup.php";
        </script>';
        //$ErrMsg = "Passwords are different.";
        //echo $ErrMsg;
    } else if ($email == $email_conf && $passwd == $passwd_conf) {
        /* SI LA CONTRASEÑA DE CONFIRMACIÓN Y LA CONTRASEÑA SON CORRECTAS
        (LO MISMO CON EL EMAIL) HAREMOS EL INSERT PARA INTRODUCIR ESOS 
        DATOS EN LA BASE DE DATOS DEL PROYECTO */
        $sql = $dbh->prepare("INSERT INTO USUARIO(nombre_user, apellidos, email, passwd, fech_nac) VALUES ('$nombre', '$apellidos', '$email', '$passwd', '$fech_nac DATE_FORMAT(%d-%m-%Y)')");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        $inserted = true;
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

if (isset($_POST['entrada'])) {

    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $sql = $dbh->prepare("SELECT * FROM usuario WHERE email = '$email' AND passwd = '$passwd'");
    $user = $dbh->prepare("SELECT nombre_user FROM usuario WHERE email = '$email'");

    $sql->setFetchMode(PDO::FETCH_ASSOC);

    $user->setFetchMode(PDO::FETCH_ASSOC);

    $sql->execute();
    $user->execute();

    $queryRol = "SELECT rol FROM usuario WHERE email = '$email'";
    $query = $dbh->prepare($queryRol);
    $query->execute();

    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    $rol = array_column($results, 'rol');

    $rolString = implode(";", $rol);

    /* COMPROBAMOS QUE LAS CREDENCIALES INTRODUCIDAS SEAN CORRECTAS */
    if (!empty($sql->fetch())) {
        sleep(1);
        echo json_encode(array('error'=> false,'texto'=> 'todoBien', 'rol' => $rol));
    } else {
        sleep(2);
        echo json_encode(array('error'=> true,'texto'=> 'todoMal'));
    }

    /* CREAMOS LA VARIABLE DE SESIÓN PARA MANTENER AL USUARIO QUE HA INICIADO SESIÓN
        EN LAS DISTINTAS PÁGINAS */

    while ($row = $user->fetch()) {
        $_SESSION["persona"] = $row['nombre_user'];
    }
}

if (isset($_POST["createAuthor"])) {
    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $nombre = $_POST["name"];
    $apellido1 = $_POST["surname1"];
    $apellido2 = $_POST["surname2"];
    $fech_nac = $_POST["fech_nac"];

    $name_pattern = "/^[a-zA-z]*$/";
    $name_lenght = strlen($nombre);
    $email_pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $passwd_pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}";

    /* REALIZAMOS TODAS LAS COMPARACIONES */
    if (!preg_match($name_pattern, $nombre)) {
        echo '<script type="text/javascript">
        alert("Only alphabets and whitespace are allowed.");
        window.location.href="signup.php";
        </script>';
        //$ErrMsg = "Only alphabets and whitespace are allowed.";
    } else if ($name_lenght > 15) {
        echo '<script type="text/javascript">
        alert("Only a name with a maximum of 15 characters lenght is allowed.");
        window.location.href="signup.php";
        </script>';
        //$ErrMsg = "Only a name with a maximum of 15 characters lenght is allowed.";
        //echo $ErrMsg;
    } else {
        /* SI LA CONTRASEÑA DE CONFIRMACIÓN Y LA CONTRASEÑA SON CORRECTAS
        (LO MISMO CON EL EMAIL) HAREMOS EL INSERT PARA INTRODUCIR ESOS 
        DATOS EN LA BASE DE DATOS DEL PROYECTO */
        $sql = $dbh->prepare("INSERT INTO AUTOR(nombre_autor, apellido_1_autor, apellido_2_autor, fecha_nac_autor) VALUES ('$nombre', '$apellido1', '$apellido2', '$fech_nac DATE_FORMAT(%d-%m-%Y)')");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        $inserted = true;
        if ($inserted) {
            /* SI TODOS LOS CAMPOS CUMPLEN CON LOS REQUISITOS 
            SALTA EL POP-UP */
            echo '<script type="text/javascript">
        alert("¡Autor registrado con éxito!");
        window.location.href="admin.php";
        </script>';
        }
    }
}

if (isset($_POST['salida'])) {
    echo '<script type="text/javascript">
              alert("See you soon!");
              window.location.href="login.php";
              </script>';
    session_destroy();
}

/*AQUÍ MODIFICAREMOS A LOS AUTORES*/
if (isset($_POST['modify_autor'])) {
    $_SESSION["aut"] = $_POST["autor_n"];
    header("location:admin.php");
}

if (isset($_POST['update_autor'])) {

    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $oldName = $_SESSION["aut"];
    $nameToMod = $_POST["namemod"];

    $sql = "UPDATE autor SET nombre_autor='$nameToMod' WHERE nombre_autor = '$oldName'";

    // Prepare statement
    $stmt = $dbh->prepare($sql);

    // execute the query
    $stmt->execute();

    echo '<script type="text/javascript">
              alert("Author updated!");
              window.location.href="admin.php";
              </script>';

    $_SESSION["aut"] = $nameToMod;
}

if (isset($_POST['delete_autor'])) {
    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $oldName = $_SESSION["aut"];
    $nameToMod = $_POST["namemod"];

    $sql = "DELETE FROM autor WHERE nombre_autor = '$oldName'";

    // Prepare statement
    $stmt = $dbh->prepare($sql);

    // execute the query
    $stmt->execute();

    echo '<script type="text/javascript">
              alert("Author deleted!");
              window.location.href="admin.php";
              </script>';

    $_SESSION["aut"] = $nameToMod;
}


if (isset($_POST["createBook"])) {
    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $title = $_POST["title"];
    $editorial = $_POST["editorial"];
    $pages = $_POST["pages"];
    $edition = $_POST["edition"];
    $synopsis = $_POST["synopsis"];
    $_SESSION["aut"] = $_POST["book_autor_n"];
    $bookAuthor = $_SESSION["aut"];
    $id_book_author = "SELECT id_autor FROM autor WHERE nombre_autor = '$bookAuthor'";
    $author = $dbh->query($id_book_author,PDO::FETCH_ASSOC)->fetch()["id_autor"];

    $genre = $_POST["genre"];
    $sql = $dbh->prepare("INSERT INTO libro(nombre_libro, editorial, paginas, edicion, sinopsis, id_autor, genero) 
    VALUES ('$title', '$editorial', '$pages', '$edition', '$synopsis', '$author', '$genre')");

    $sql->execute();
    $inserted = true;
    if ($inserted) {
        /* SI TODOS LOS CAMPOS CUMPLEN CON LOS REQUISITOS 
        SALTA EL POP-UP */
        echo '<script type="text/javascript">
    alert("¡Libro registrado con éxito!");
    window.location.href="admin.php";
    </script>';
    }
}








if (isset($_POST['eliminacion'])) {
    $dbname = 'PROYECTO_TRANSVERSAL';
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $password_db = '';
        $user_db = 'root';
        $dbh = new PDO($dsn, $user_db, $password_db);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $oldName = $_SESSION["persona"];

    $sql = "DELETE FROM usuario WHERE nombre_user = '$oldName'";

    // Prepare statement
    $stmt = $dbh->prepare($sql);

    // execute the query
    $stmt->execute();

    echo '<script type="text/javascript">
              alert("User deleted!");
              window.location.href="login.php";
              </script>';

    session_destroy();
}

if (isset($_POST['modify'])) {
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

    /* GUARDAMOS TODAS LAS CREDENCIALES DEL MODIFICAR EN
        VARIABLES MEDIANTE POST */
    $nombre = $_POST['name'];
    $apellido = $_POST['surname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $fecha_nac = $_POST['fecha_nac'];

    /* GUARDAMOS TODOS LOS PATTERNS EN VARIABLES PARA QUE EL CÓDIGO NO SEA TAN ENGORROSO */
    /*$name_pattern = "/^[a-zA-z]*$/";
        $name_lenght = strlen($nombre);
        $email_pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $passwd_pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}";*/

    /* REALIZAMOS TODAS LAS COMPARACIONES */
    /*if (!preg_match($name_pattern, $nombre)) {
        echo '<script type="text/javascript">
        alert("Only alphabets and whitespace are allowed.");
        window.location.href="modify2.php";
        </script>';
    } else if ($name_lenght > 15) {
        echo '<script type="text/javascript">
        alert("Only a name with a maximum of 15 characters lenght is allowed.");
        window.location.href="modify2.php";
        </script>';
    } else if ($email == $email_conf && $passwd == $passwd_conf) {
        //SI LA CONTRASEÑA DE CONFIRMACIÓN Y LA CONTRASEÑA SON CORRECTAS (LO MISMO CON EL EMAIL) HAREMOS EL MODIFICAR PARA INTRODUCIR ESOS DATOS EN LA BASE DE DATOS DEL PROYECTO 
        */
    //nombre de persona
    $nombre_user = $_SESSION["persona"];
    //mostrar filas del user
    $query = $dbh->prepare("SELECT * FROM usuario WHERE nombre_user = '$nombre_user';");
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        // usaremos el foreach para mostrar resultados
        foreach ($results as $result) {
            echo "<tr>
                <td>" . $result->nombre_user . "</td>
                <td>" . $result->apellidos . "</td>
                <td>" . $result->email . "</td>
                <td>" . $result->passwd . "</td>
                <td>" . $result->fech_nac . "</td>
                </tr>";
            $id_user = $result->id_user;
            echo $id_user;
        }
    }
    //action modificar
    $sql = $dbh->prepare("UPDATE usuario
                                SET nombre_user = '$nombre',
                                    apellidos = '$apellido',
                                    email = '$email',
                                    passwd = '$passwd',
                                    fech_nac = '$fecha_nac'
                                WHERE id_user = '$id_user';");
    $sql->execute();
    $_SESSION["persona"] = $nombre;
    if ($sql->rowCount() > 0) {
        //$count = $sql -> rowCount();
        /*echo "<div class='content alert alert-primary' >
            Gracias: $count registro ha sido actualizado </div>";*/
        echo '<script type="text/javascript">
            alert("¡Se han guardado los cambios!");
            window.location.href="perfil.php";
            </script>';
    } else {
        /*echo "<div class='content alert alert-danger'> No se pudo actulizar el registro </div>";
            print_r($sql->errorInfo());*/
        echo '<script type="text/javascript">
            alert("¡No hay nuevos cambios!");
            window.location.href="perfil.php";
            </script>';
    }
} // Cierra envio

?>