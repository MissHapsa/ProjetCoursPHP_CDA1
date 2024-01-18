<?php

$vehicule = [
	'conducteur' => [
		'nom' => 'John',
		'prenom' => 'Doe',
		'permis' => ['B', 'A'],
	],
	'caracteristiques' => [
		'couleur' => 'rouge',
		'annee' => 2020,
		'puissance' => 4,
	],
	'finitions' => [
		'interieur' => [
			'type' => 'cuir',
			'couleur' => 'brun'
		],
		'exterieur' => [
			'attache_remorque' => true,
			'couleur' => 'rouge',
			'vitres' => 'teintées',
		],
	],
];

echo $vehicule ['conducteur']['prenom'], ' ', $vehicule ['conducteur']['nom'];
echo '<br>';
print_r($vehicule ['conducteur']['permis']);
echo '<br>';
echo ($vehicule ['finitions']['interieur']['type']);
echo '<br>';
echo ($vehicule ['finitions']['exterieur']['couleur']);
echo '<br>';
echo  $vehicule ['caracteristiques']['annee'];
echo '<br>';
echo 'la puissance du vehicule est de '. ($vehicule ['caracteristiques']['puissance']);




/*
À l'aide des commandes echo et print_r, affichez les caractéristiques suivantes du véhicule :

- nom et prénom du conducteur

- Tous les permis du conducteurs

- type de finition intérieur
- couleur de finition extérieure
- puissance et année du véhicule
*/