
<?php

$article = array(
    'id' => 23,
    'title' => 'Les souris seraient-elle en réalité maîtres du monde ?',
    'content' => 'Lorem ipsum dolor sit amet, et eliptir consec dei lorem ipsum dolor sit amet et eliptir consec dei ... ',
);
?>
<html lang="fr">
    <head>
        <title>Isset 2</title>
    </head>
    <body>
        <h1><?php echo isset($article['title']) ? $article['titre']  : 'pas de titre'?> </h1>
         
        <p>
            <img src="<?php echo $article['thumbnail'] 
            if (isset($article['thumbnail'])) { 
                echo $article['thumbnail'];
             ?>
        <?php echo isset($article['contenu']) ? $article['contenu']  : 'pas de contenu'?> 
        </p>


<?php

/*
  1. Ecrivez un script PHP qui indique le nombre de chaines de caractères vides dans le tableau $strings

  2. Indiquez maintenant le nombre de chaines qui contiennent effectivement du texte
 */



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