<?php
// snack 1
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

// snack 3
$posts = [
    '01/05/2024' => [
        [
            'title' => 'Unione Europea e Innovazione',
            'author' => 'Mario Rossi',
            'text' => 'L\'Unione Europea sta guidando l\'innovazione tecnologica con il suo nuovo piano di investimenti in IA e blockchain. Questo potrebbe segnare l\'inizio di una nuova era per l\'Europa.'
        ],
    ],
    '02/05/2024' => [
        [
            'title' => 'Politica Ambientale Europea',
            'author' => 'Luca Bianchi',
            'text' => 'La politica ambientale dell\'UE sta dando i suoi frutti. Le emissioni di CO2 sono diminuite del 20% negli ultimi 10 anni. Un grande passo avanti per il nostro pianeta.'
        ],
    ],
    '03/05/2024' => [
        [
            'title' => 'L\'UE e la Crisi dei Rifugiati',
            'author' => 'Giulia Verdi',
            'text' => 'L\'UE deve affrontare la crisi dei rifugiati con solidarietà e cooperazione tra gli stati membri. È una sfida che riguarda tutti noi.'
        ],
    ],
    '04/05/2024' => [
        [
            'title' => 'L\'Euro e l\'Economia Europea',
            'author' => 'Francesco Neri',
            'text' => 'L\'Euro ha svolto un ruolo cruciale nel mantenere la stabilità economica in Europa durante la pandemia. È un esempio di come l\'unione fa la forza.'
        ],
    ],
    '05/05/2024' => [
        [
            'title' => 'Politica Estera dell\'UE',
            'author' => 'Laura Gialli',
            'text' => 'La politica estera dell\'UE sta diventando sempre più influente a livello globale. L\'UE sta dimostrando che può essere un attore globale.'
        ],
    ],
    '06/05/2024' => [
        [
            'title' => 'L\'UE e i Diritti Umani',
            'author' => 'Marco Azzurri',
            'text' => 'L\'UE continua a essere un faro per i diritti umani nel mondo. La sua dedizione alla protezione dei diritti umani è ammirevole.'
        ],
    ],
];

// snack 4
$numeri = range(1, 100);
shuffle($numeri);
$array_numeri_casuali = array_slice($numeri, 0, 15);

// snack 5
$paragrafo = "La questione israelo-palestinese è un conflitto geopolitico di lunga data che ha radici storiche profonde e complesse. Al centro del conflitto ci sono questioni di terra, identità nazionale e diritti religiosi. Da un lato, c’è Israele, uno Stato ebraico fondato nel 1948, che cerca di mantenere la sua sicurezza e identità in una regione tumultuosa. Dall’altro lato, ci sono i palestinesi, un popolo arabo che rivendica il diritto all’autodeterminazione e alla sovranità nella terra che considerano la loro patria storica. Nonostante gli sforzi di pace e i negoziati, il conflitto persiste, alimentato da questioni irrisolte come lo status di Gerusalemme, i confini, la sicurezza e il diritto al ritorno dei rifugiati palestinesi. La questione israelo-palestinese rimane una delle questioni più complesse e divisive del mondo contemporaneo.";
// La funzione strtok restituisce la stringa fino al primo punto, quindi continua da dove si è fermata ogni volta che viene chiamata di nuovo.
$paragrafo = strtok($paragrafo, ".");

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
        <div>
            <p>Nome:</p> <input type="text" name="name">
            <p>Email:</p> <input type="text" name="mail">
            <p>Età:</p> <input type="text" name="age">
            <div>
                <input type="submit">
            </div>
        </div>
    </form>

    <h2>3° snack</h2>
    <?php
    foreach ($posts as $data => $postArray) {
        echo "<h2>Data: " . htmlspecialchars($data) . "</h2>";
        echo "<div class='post'>";
        foreach ($postArray as $post) {
            echo "<h3>Titolo: " . htmlspecialchars($post['title']) . "</h3>";
            echo "<p><strong>Autore:</strong> " . htmlspecialchars($post['author']) . "</p>";
            echo "<p><strong>Testo:</strong> " . htmlspecialchars($post['text']) . "</p>";
        }
        echo "</div>";
    }
    ?>

    <h2>4° snack</h2>
    <!-- la funzione implode serve a trasformare un array in una stringa -->
    <p><strong>Numeri Randomici: </strong><?php echo implode(',', $array_numeri_casuali); ?></p>

    <h2>5° snack</h2>
    <?php 
    while ($paragrafo !== false) {
        echo "<p>" . $paragrafo . ".</p>";
        $paragrafo = strtok(".");
    }
    ?>

</body>

</html>