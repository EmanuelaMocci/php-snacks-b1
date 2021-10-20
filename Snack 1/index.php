<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- 1) Creo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. -->
<?php 
    $partite = [
        [
            "squadraCasa" => "Boston Celtics",
            "squadraOspite" => "Chicago Bulls",
            "puntiCasa" => 20,
            "puntiOspite" => 30
        ],
        [
            "squadraCasa" => "Atlanta Hawks",
            "squadraOspite" => "Miami Heat",
            "puntiCasa" => 40,
            "puntiOspite" => 60
        ],
        [
            "squadraCasa" => "Toronto Raptors",
            "squadraOspite" => "Washington Wizards",
            "puntiCasa" => 50,
            "puntiOspite" => 10
        ]
    ];

    // 2) Stampo a schermo tutte le partite
    // for ($i = 0; $i<count($partite); $i++){
    //     echo $partite[$i]["squadraCasa"] . "-" . $partite[$i]["squadraOspite"] . " " . "|" . " " . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] . "<br>";
    // }
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
    <h1>Le partite di oggi: </h1>
    <ul>
        <!-- 2) Stampo a schermo tutte le partite -->
        <?php for ($i = 0; $i < count($partite); $i++) { ?>

         <li><?php echo "{$partite[$i]["squadraCasa"]}  -  {$partite[$i]["squadraOspite"]} | {$partite[$i]["puntiCasa"]}  -  {$partite[$i]["puntiOspite"]}"; ?></li>
        
        <?php } ?>
    </ul>
</body>
</html>
