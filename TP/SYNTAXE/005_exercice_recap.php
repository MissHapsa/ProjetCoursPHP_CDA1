<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PERSONNAGE REINE RAYAA</title>
</head>

<body>  
  
<?php

// Définir les variables 
$nom = 'Reine';
$prenom = "Rayaa";

echo $nom . " " . $prenom;

echo '<br>';

// Tableau associatif pour les caractéristiques
$caracteristiques = [
  'Force' => 12,
  'Dextérité' => 8,
  'Intelligence' => 15,
  'Sagesse' => 17,
  'Malice' => 17
];

print_r($caracteristiques);
echo '<br>';

echo $nom, " ", $prenom;

$avatar = 'images/Rayaa.jpg';

echo '<br><img src="', $avatar, '" alt="avatar">';




/*

	Vous devez creer une page web présentant les caractéristiques d'un personnage imaginaire,
	issu d'un jeu de role.

	Les informations du personnage seront enregistrees dans des variables.

	On y trouvera :

	- Une image d'avatar
	- Le nom (dans une variable)
	- Le prénom (dans une variable)
	- Un tableau de caractéristiques (dans une variable, on utilisera un tableau associatif)
	*/
?> 
</body>

</html>