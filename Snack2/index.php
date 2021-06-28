<?php 
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Verifica correttezza indirizzo e-mail</h1>
    <div> <?php
            $name = $_GET["name"];
            $mail = $_GET["email"];
            $age = $_GET["age"];
            if(empty($name) || empty($mail) || empty($age)) {
                echo "ERROR";
            } else {

                if(strpos($mail , ".") !== false && strpos($mail , "@") !== false && strlen($name) > 3 && is_numeric($age) ) {
                    echo "Accesso riuscito";
                } else {
                    echo "Accesso negato";
                }
            }
    ?></div>
</body>
</html>
<!-- ?name=gianluca&email=michelaciao.it&age=23 -->