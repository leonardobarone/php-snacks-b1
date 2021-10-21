<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
$alunni = [
    [
        "nome" => "Leonardo",
        "cognome" => "Barone",
        "voti" => [4, 6, 9, 3, 5]
    ],
    [
        "nome" => "Edoardo",
        "cognome" => "Magnani",
        "voti" => [7, 5, 8, 7, 5]
    ],
    [
        "nome" => "Massimiliano",
        "cognome" => "Pignataro",
        "voti" => [5, 5, 6, 8, 6]
    ],
];
function media($arr) {
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum / count($arr); 
}

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
        <?php foreach($alunni as $alunno): ?>
            <h1><?= "{$alunno["nome"]} {$alunno["cognome"]}"?></h1>
            <h3>
                <?php echo media($alunno["voti"]) ?>
            </h3>
        <?php endforeach ?>        
    </body>
</html>