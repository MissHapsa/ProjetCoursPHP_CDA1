
<html lang="fr">
    <head>
        <title>Isset 2</title>
    </head>
    <body>


<!-- 1. Ecrivez un script PHP qui indique le nombre de chaines de caractères vides dans le tableau $strings -->

<!-- 2. Indiquez maintenant le nombre de chaines qui contiennent effectivement du texte -->

<?php

$strings = array('Bonjour', '', 'Bom dia', 'Hello', 'Guten Tag', '');

// 1. Nombre de chaînes de caractères vides
$nbChainesVides = 0;

foreach ($strings as $chaine) {
    if (empty($chaine)) {
        $nbChainesVides++;
    }
}

echo "1. Le nombre de chaînes de caractères vides est : $nbChainesVides\n";


// 2. Nombre de chaînes de caractères non vides
$nbChainesNonVides = count(array_filter($strings, 'strlen'));

echo "2. Le nombre de chaînes de caractères non vides est : $nbChainesNonVides\n";
?>
</body>
</html>