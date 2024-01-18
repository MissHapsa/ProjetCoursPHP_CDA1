<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // fonction empty()
    // cette fonction permet de verifier si une variable est vide ou non
    // si la variable est vide elle renvoie true
    // si la variable n'est pas vide elle renvoie false


    $var = "";
    echo empty($var); // true
    $var = " ";
    echo empty($var); // false
    $var = "test";
    echo empty($var); // false
    $var = 0;   
    echo empty($var); // false
    $var = 1;
    echo empty($var); // false
    $var = 1.0;
    echo empty($var); // false

    // la fonction isset()
    // cette fonction permet de verifier si une variable existe ou non
    // si la variable existe elle renvoie true
    // si la variable n'existe pas elle renvoie false

    $var = "";
    echo isset($var); // false
    $var = " ";
    echo isset($var); // true
    $var = "test";
    echo isset($var); // true
    $var = 0;
    echo isset($var); // true
    $var = 1;
    echo isset($var); // true
    $var = 1.0;
    echo isset($var); // true
    ?>
    

</body>
</html>