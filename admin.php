<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/additional-methods.min.js"></script>
    <script src="JS/signup.js"></script>
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="CSS/login_js.css">
    <link rel="stylesheet" href="CSS/inicio.css">
    <link rel="icon" type="image/png" href="Imagenes/Logo/logo_small_icon_only.png" sizes="96x96">
    <title>RTR | Author register</title>
</head>

<body>
    <header>
        <div class="userInicio">
            <p id="userNameInicio">Welcome, <?php session_start();
                                            echo $_SESSION["persona"]; ?></p>
            <div id="logout">
                <form method="POST" action="credentials.php"><input name="salida" class="button" type="submit" value="LOGOUT"></form><br>
            </div>
        </div>
    </header>
    <br>
    <form id="signup_form" method="POST" action="credentials.php">
        <div id="myGrid">
            <div>
                <h1>Add authors:</h1>
                <p>Name:</p>
                <p><input name="name" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                <p>Surname:</p>
                <p><input name="surname1" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                <p>Lastname:</p>
                <p><input name="surname2" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                <p>Date of Birth</p>
                <p><input name="fech_nac" type="date" max="2010-01-01"></p>

                <p><input name="createAuthor" class="button" type="submit" value="ADD AUTHOR"></p>
            </div>
            <div>
                <h1>Modify authors:</h1>
                <p>Select the author you want to modify:</p>
                <?php
                $dbname = 'PROYECTO_TRANSVERSAL';
                try {
                    $dsn = "mysql:host=localhost;dbname=$dbname";
                    $password_db = '';
                    $user_db = 'root';
                    $dbh = new PDO($dsn, $user_db, $password_db);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $sql = $dbh->prepare("SELECT nombre_autor FROM AUTOR");
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                $sql->execute();
                ?>
                <select name='autor_n'>
                    <?php
                    foreach ($sql as $valores) {
                        print("<option value='{$valores["nombre_autor"]}'>{$valores["nombre_autor"]}</option>");
                    }
                    ?>
                </select><br>
                <p><input name="modify_autor" class="button" type="submit" value="CHARGE AUTHOR"></p>
                <div>
                    <h1>Author selected:</h1>
                    <p><b><?php if (isset($_SESSION["aut"])) {
                                echo $_SESSION["aut"];
                            } else {
                                echo "<b>No author selected</b>";
                            }; ?></b></p>
                    <p>New name:</p>
                    <p><input name="namemod" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                    <p><input name="update_autor" class="button" type="submit" value="UPDATE AUTHOR"></p>
                    <p><input name="delete_autor" class="button" type="submit" value="DELETE AUTHOR"></p>
                </div>
            </div>
        </div>


        <div>
            <br>
            <div>
                <h1>Add books: </h1>
                <p>Title:</p>
                <p><input name="title" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                <p>Editorial:</p>
                <p><input name="editorial" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                <p>Pages:</p>
                <p><input name="pages" type="number" min="1"></p>

                <p>Edition:</p>
                <p><input name="edition" type="number" min="1"></p>

                <p>Synopsis:</p>
                <p><textarea  name="synopsis" type="text" style="text-transform: capitalize; width:500px; height:150px" pattern="[A-Za-z].{2,}$"></textarea></p>
                <p>Author:</p>
                <?php
                $dbname = 'PROYECTO_TRANSVERSAL';
                try {
                    $dsn = "mysql:host=localhost;dbname=$dbname";
                    $password_db = '';
                    $user_db = 'root';
                    $dbh = new PDO($dsn, $user_db, $password_db);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $sql = $dbh->prepare("SELECT nombre_autor FROM AUTOR");
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                $sql->execute();
                ?>
                <select name='book_autor_n'>
                    <?php
                    foreach ($sql as $valores) {
                        print("<option value='{$valores["nombre_autor"]}'>{$valores["nombre_autor"]}</option>");
                    }
                    ?>
                </select><br>

                <p>Genre:</p>
                <p><input name="genre" type="text" style="text-transform: capitalize;" pattern="[A-Za-z].{2,}$"></p>

                <p><input name="createBook" class="button" type="submit" value="ADD BOOK"></p>
            </div>
            <br>
        </div>

    </form>
</body>

</html>

<?php



?>