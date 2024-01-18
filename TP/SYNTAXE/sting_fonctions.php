<?php

$string = "Je suis a Bordeaux pour la journee";

$string = strtolower($string); // toutes les lettres en minuscule
echo $string;
echo "<br>";


$string = strtoupper($string);// toutes les lettres en majuscule
echo $string;
echo "<br>";

$string = ucfirst($string); // toutes les lettres en majuscule et la premiere lettre en minuscule
echo ucfirst($string);
echo "<br>";

$bigString = "Je suis a Bordeaux pour la journee mais je n aurais pas le temps de visiter la ville ni meme de me promener";

$position = strpos($bigString, "Bordeaux"); // retourne la position de la chaine dans la chaine
echo $position;

$part = substr($bigString, 0, 10); // retourne les 10 caracteres de la chaine
echo $part;
echo "<br>";

$string2 = "Hello the world, i am john!"; 
echo $string2; 
echo "<br>";
echo str_replace   ("john", "hapsa", $string2); // remplace la chaine par la chaine de remplacement