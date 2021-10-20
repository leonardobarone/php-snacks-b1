<?php 
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    $name = $_GET["nome"];
    $mail = $_GET["email"];
    $age = $_GET["eta"];
    // $age = (int)$age;
    $esito = "Inserisci nome, email ed età";

    if (!empty($name) && !empty($mail) && !empty($age)) {
        if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.')) {
            $esito = "Accesso riuscito";
        } else {
            $esito = "Accesso negato";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanck 2</title>
    </head>
    <body>
        <h1><?= $esito ?></h1>
    </body>
</html>