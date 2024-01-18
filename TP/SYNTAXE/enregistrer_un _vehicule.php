<?php

$voitureMarque = $_POST['voiture'];
$voitureNom =  $_POST['nom'];
$voiturePoids = $_POST['poids'];
$voitureChevaux = $_POST['chevaux'];

//tester les variables avec empty


if (empty($voitureMarque)) {
    echo "Veuillez saisir la Marque du véhicule <br>";
} elseif (empty($voitureNom)) {
    echo "Veuillez saisir le nom du véhicule <br>";
} elseif (empty($voiturePoids)) {
    echo "Veuillez saisir le poids du véhicule <br>";
} elseif (empty($voitureChevaux)) {
    echo "Veuillez saisir le nombre de chevaux du véhicule <br>";
} else {
    echo "Voiture bien enregistrée";
}
?>

    
   










