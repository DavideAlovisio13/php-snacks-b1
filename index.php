<?php
$stagione = [
    [
        'squadra_di_casa' => 'LA Lakers',
        'squadra_ospite' => 'Utah Jazz',
        'punti_squadra_di_casa' => 85,
        'punti_squadra_ospite' => 78
    ],
    [
        'squadra_di_casa' => 'Phoenix Suns',
        'squadra_ospite' => 'Portland Trail Blazers',
        'punti_squadra_di_casa' => 92,
        'punti_squadra_ospite' => 87
    ],
    [
        'squadra_di_casa' => 'Sacramento Kings',
        'squadra_ospite' => 'Golden State Warriors',
        'punti_squadra_di_casa' => 100,
        'punti_squadra_ospite' => 93
    ],
    [
        'squadra_di_casa' => 'San Antonio Spurs',
        'squadra_ospite' => 'Minnesota Timberwolves',
        'punti_squadra_di_casa' => 100,
        'punti_squadra_ospite' => 110
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpSnacks</title>
</head>

<body>
    <h2>1° snack</h2>
    <?php foreach ($stagione as $partita) {
        echo $partita['squadra_di_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_squadra_di_casa'] . ' - ' . $partita['punti_squadra_ospite'] . '<br>';
    }
    ?>

    <h2>2° snack</h2>
    <form action="accesso.php" method="GET">
        Nome: <input type="text" name="name"><br>
        Email: <input type="text" name="mail"><br>
        Età: <input type="text" name="age"><br>
        <input type="submit">
    </form>

</body>

</html>