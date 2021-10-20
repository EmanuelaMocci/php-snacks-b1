<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php 
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grey">
        <ul>
            <?php foreach ($db["teachers"] as $teacher) { ?>
                <li><?php echo "{$teacher['name']} {$teacher['lastname']}"?></li>
            <?php } ?>  
        </ul>
    </div>

    <div class="green">
    <ul>
            <?php foreach ($db["pm"] as $names) { ?>
                <li><?php echo "{$names['name']} {$names['lastname']}"?></li>
            <?php } ?>  
        </ul>
    </div>
</body>
</html>