<?php 
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    $partite = [
        [
            "squadraCasa" => "Olimpia Milano",
            "squadraOspite" => "Venezia",
            "puntiSquadraCasa" => 93,
            "puntiSquadraOspite" => 68,
        ],
        [
            "squadraCasa" => "Cremona",
            "squadraOspite" => "Varese",
            "puntiSquadraCasa" => 94,
            "puntiSquadraOspite" => 78,
        ],
        [
            "squadraCasa" => "Brescia",
            "squadraOspite" => "Basket Napoli",
            "puntiSquadraCasa" => 98,
            "puntiSquadraOspite" => 88,
        ],
        [
            "squadraCasa" => "Pesaro",
            "squadraOspite" => "Tortona",
            "puntiSquadraCasa" => 81,
            "puntiSquadraOspite" => 90,
        ],
        [
            "squadraCasa" => "Treviso",
            "squadraOspite" => "Sassari",
            "puntiSquadraCasa" => 64,
            "puntiSquadraOspite" => 71,
        ],
        [
            "squadraCasa" => "Virtus Bologna",
            "squadraOspite" => "Trieste",
            "puntiSquadraCasa" => 94,
            "puntiSquadraOspite" => 79,
        ],
    ];
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanck 1</title>
    </head>
    <body>
        <ul>
            <!-- Stampiamo a schermo tutte le partite con questo schema.
            Olimpia Milano - Cantù | 55-60 -->
            <?php
                // for ($i = 0; $i < count($partite); $i++) {
                //     echo "<li> {$partite[$i]["squadraCasa"]} - {$partite[$i]["squadraOspite"]} | {$partite[$i]["puntiSquadraCasa"]}-{$partite[$i]["puntiSquadraCasa"]} </li>";
                // }
                foreach ($partite as $partita) {
                    echo "<li> {$partita["squadraCasa"]} - {$partita["squadraOspite"]} | {$partita["puntiSquadraCasa"]}-{$partita["puntiSquadraCasa"]} </li>";
                }
            ?>
        </ul>
    </body>
</html>

<!-- echo -->
<?= $test ?>