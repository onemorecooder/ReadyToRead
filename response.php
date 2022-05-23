<?php
    
    // Se recogen los datos que se pasan en el Ajx 
    $firstname = ucfirst(strtolower($_POST['firstname']));
    $lastname = ucfirst(strtolower($_POST['lastname']));
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // LLamamos a los "nameespase" de los clases de PHPMailer para evitar confusion de clases
    use PHPMailer\PHPMailer\PHPMailer,
        PHPMailer\PHPMailer\Exception;

    // Importacion de las herramientas de PHPMailer
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    // Se genera un nuevo objeto PHPMailer y como parametro le estamos diciendo que acepte excepciones
    $mail = new PHPMailer(true);

    try{
    // Configraciion del servidor
    $mail->SMTPDebug = 0; //Enable verbose debug output
    $mail->isSMTP(); // Especificamos que el mail se enviara con el protoclo de transferencia simple (SMTP)
    $mail->Host = 'smtp.gmail.com'; //El Servidor SMTP a enviar
    $mail->SMTPAuth = true; //Habilitamos la autenticacion
    $mail->Username = 'readtytoread@gmail.com'; // Nombre -> Nuetra Empresa
    $mail->Password = 'EresPayasosiponesesto'; // Contraseña
    $mail->Port = 587; // Puerto TCP a conectar 

    
    $mail->setFrom($email, $firstname . " " . $lastname); // Nombre del remitente
    $mail->addAddress('readtytoread@gmail.com'); // Correo del receptor
    $mail->AddReplyTo($email, $firstname); // Correo a contestar de vuelta

    //Contenido
    $mail->isHTML(true); // Mail en formato HTML
    $mail->Subject = $subject; // Asunto
    $mail->Body    =  $message; // mensahe

    $mail->send();
    echo "Exito";
    } catch (Exception $e) {
        echo "Error";
    };
    
?>