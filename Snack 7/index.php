<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php 
    $studenti = [
        [
            'nome' => 'Maura',
            'cognome' => 'Rossi',
            'voti' => [4, 6, 8, 5]
        ],
        [
            'nome' => 'Andrea',
            'cognome' => 'Verdi',
            'voti' => [10, 7, 8, 9]
        ],
        [
            'nome' => 'Lucia',
            'cognome' => 'Bianchi',
            'voti' => [7, 6, 8, 5]
        ]
    ];

    function avarage($nums) {
        $sum = 0;
        foreach($nums as $num) {
            $sum += $num;
        }
        return round($sum / count($nums), 2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avarage</title>
</head>
<body>
    <ul>
    <?php foreach($studenti as $key) { ?>
        <li>
            <h3><?php echo "{$key['nome']} {$key['cognome']}"; ?></h3>
            <p>Media voto: <?php echo avarage($key["voti"]); ?></p>
        </li>
    <?php } ?>
    </ul>

</body>
</html>
