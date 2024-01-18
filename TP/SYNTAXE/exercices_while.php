<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau HTML</title>
</head>
<body>

<table border="1">
    <?php
    $ligne = 1;
    $valeur = 1;

    while ($ligne <= 20) {
        echo '<tr>';
        for ($colonne = 1; $colonne <= 5; $colonne++) {
            echo '<td>' . $valeur . '</td>';
            $valeur++;
        }
        echo '</tr>';
        $ligne++;
    }
    ?>
</table>

<table border="1">
    <?php
    $ligne = 1;

    do {
        echo '<tr>';
        $colonne = 1;
        
        do {
            $valeur = ($ligne - 1) * 10 + $colonne;
            echo '<td>' . $valeur . '</td>';
            $colonne++;
        } while ($colonne <= 10);

        echo '</tr>';
        $ligne++;
    } while ($ligne <= 10);
    ?>
</table>


<?php
$rouletteRusse = array(
    1 => 'vide',
    2 => 'vide',
    3 => 'vide',
    4 => 'chargé',
    5 => 'vide',
    6 => 'vide',
);

echo '<ul>';
foreach ($rouletteRusse as $case => $etat) {
    echo '<li>';
    
    if ($etat === 'vide') {
        echo '*click*';
    } elseif ($etat === 'chargé') {
        echo 'PAN !';
        break;  // Arrête l'affichage lorsque la case 'chargé' est atteinte
    }
    echo '</li>';
}
echo '</ul>';
?>

</body>
</html>




