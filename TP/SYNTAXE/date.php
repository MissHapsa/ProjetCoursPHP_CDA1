<?php
// elle permet de formater l affichage des dates
echo date('21 Dec 2014');
echo '<br>';

$date1 = date('10/01/2014');

$date2 = date('d/m/Y');

echo $date1;
echo '<br>';
echo $date2;
echo '<br>';

// les differents format de date sont disponibles sur le site de PHP
// http://php.net/manual/fr/function.date.php
// https://www.php.net/manual/fr/datetime.format.php

$date3 = date('d');
echo $date3;
$date4 = date('j'); // j donne le jour du mois  sans le 
echo $date4;
echo '<br>';
$date5 = date('l'); // l donne le jour de la semaine
echo $date5;
echo '<br>';
$date6 = date('n'); // n donne le mois
echo $date6;
echo '<br>';
$date7 = date('Y'); // Y donne l année
echo $date7;
echo '<br>';
$date8 = date('h,i,s'); // h,i,s donne l heure, la minute et seconde
echo $date8;
echo '<br>';
$date9 = date('U'); // timestamp unix = le nombre de secondes depuis le 1er janvier 1970
echo $date9;
echo '<br>';
echo date('d/m/Y',$date9);