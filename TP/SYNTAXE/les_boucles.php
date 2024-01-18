<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>les boucles</h1>
    <?php

    // les boucles permettent de répéter des instructions
    // pour faire une boucle on utilise le mot clef "for"
     for($i=0; $i<10; $i++){
         echo $i . "<br>";
    }    

    $commande  = array(
        'element1',
        'element2',
        'element3',
        'element4'
    );

$nombre_de_commande = count($commande);

    for($i=0; $i<$nombre_de_commande; $i++){
        echo $commande[$i]. "<br>";
    }   

    ?>

</body>
</html>