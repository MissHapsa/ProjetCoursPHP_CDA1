<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $prenom = "Queen"; // variable de type string
    $nom = "Anne";  // variable de type string
    $annee_naissance  = 1985; // variable de type int
    $poids = 70.6; // variable de type float

    echo 'prenom est de type : '.gettype($prenom);
    echo '<br>';
    echo 'nom est de type : '.gettype($nom);
    echo '<br>';
    echo 'annee_naissance est de type : '.gettype($annee_naissance);
    echo '<br>';    
    echo 'poids est de type : '.gettype($poids);
    ?>
</body>
</html>