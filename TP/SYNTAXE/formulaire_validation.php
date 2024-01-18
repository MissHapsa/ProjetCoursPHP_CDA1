<?php
// filtrer les donnees dans un formulaire
// http://php.net/manual/fr/function.filter-input.php
// http://php.net/manual/fr/filter.filters.php
// la fonction empty permet de tester si le champ est vide
empty($variable);
// la longeur d un champ obligatoire
strlen($variable);

$nameLength = strlen($_POST['name']);
if ($nameLength < 3) {
    echo 'trop court';
} else {
    echo 'ok';
}

// la fonction trim permet de cacher les espaces dans un texte
$name = trim($_POST['name']);
