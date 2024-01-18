<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a = 4;
$b = 2;
$c = 7;


// addition
echo $resultat = $a + $b;

echo "<br>";
// soustraction
echo $resultat = $c - $b;

echo "<br>";

// multiplication
echo $resultat = $a * $b;

echo "<br>";

// division
echo $resultat = $c / $b;

echo "<br>";

// modulo
echo $resultat = $c % $b;
echo "<br>";

// exponentiation
echo $resultat = $a ** $b;

echo "<br>";

// concatenation
echo $resultat = $a. $b;

echo "<br>";    

// incrementation ajout de 1
$a++;
echo $a++; // ajout de 1 puis affichage
echo ++$a; // affichage puis ajout de 1

// decrementation soustraction de 1
$a--;
    echo $a--; // soustraction de 1 puis affichage
    echo --$a; // affichage puis soustraction de 1  

    echo "<br>";


// chiffre aleatoire random entre 0 et 100
    echo rand(0, 100);
    echo "<br>";

// concatenation de chaines de caractères

    $a = "Bonjour";
    $b = "le monde";

    echo $a. " ". $b;
    echo "<br>";

// concatenation de chaines de caractères avec concatenation de chaines de caractères
    $a = "Bonjour";
    $b = "le monde";
    $c = "j'aime les ";
    $d = ['php', 'html', 'css'];
    
    echo $a. " ". $b. " ". $c. " ". $d[2];

    // concateration de chaines de carateres avec l option aleatoire
    echo "<br>";    
    echo $a. " ". $b. " ". $c. " ". $d.rand(0,2);  











?>
</body>
</html>



