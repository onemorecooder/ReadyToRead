<?php
session_start();
//if (isset($_POST['modify'])) {
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
    $fecha_nac = $_POST['fecha_nac'];

    //action modificar
    $sql = $dbh->prepare("UPDATE usuario
                                SET nombre_user = '$nombre',
                                    apellidos = '$apellido',
                                    email = '$email',
                                    fech_nac = '$fecha_nac'
                                WHERE email = '$email'");
    $sql->execute();
    
    /* COMPROBAMOS QUE LAS CREDENCIALES INTRODUCIDAS SEAN CORRECTAS AJAX */
    
    if ($sql==false) {
        echo "noexit";
        
    } else {
        echo "exit";
        $user = $dbh->prepare("SELECT nombre_user FROM usuario WHERE email = '$email'");
        $user->setFetchMode(PDO::FETCH_ASSOC);
        $user->execute();
        session_unset();
        while ($row = $user->fetch()) {
            $_SESSION["persona"] = $row['nombre_user'];
            
        }
    }
    
//} // Cierra envio

?>