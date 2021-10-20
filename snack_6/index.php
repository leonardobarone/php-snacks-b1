<?php

// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 6</title>
        <style>
            .forma {
                display: inline-block;
                padding: 30px 80px;
            }
            .grigio {
                background-color: grey;
            }
            .verde {
                background-color: green;
            }
        </style>
    </head>
    <body>
        <?php foreach($db as $nameRule => $rule) { ?>
            <h2><?php echo strtoupper($nameRule) ?></h2>

                <?php if($nameRule == 'teachers') { ?>
                    
                    <div class="grigio forma">
                        <?php foreach($rule as $person) { ?>
                            <h3><?= "{$person["name"]} {$person["lastname"]} " ?></h3>
                        <?php } ?>
                    </div>

                <?php } else {?>

                    <div class="verde forma">
                        <?php foreach($rule as $person) { ?>
                            <h3><?= "{$person["name"]} {$person["lastname"]} " ?></h3>
                        <?php } ?>
                    </div>

                <?php } ?>
        
        <?php } ?>
    </body>
</html>