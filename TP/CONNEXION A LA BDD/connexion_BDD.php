<?php
// chapitre concernant la connexion aux bases de données
// la classe PDO est un connecteur vers une base de données
// le lien vers la documentation de PDO est ici :   
// https://www.php.net/manual/fr/book.pdo.php

// import du fichier config.php
require_once 'config.php';

try {
$pdo = new PDO('mysql:host='.$MYSQL_DBHOST.';dbname='.$MYSQL_DBNAME.';port='.$MYSQL_DBPORT, $MYSQL_DBUSER, $MYSQL_DBPASS);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connexion à la base de données réussie";
}
catch (PDOException $e) {
    echo "Echec de la connexion : ". $e->getMessage();
    exit();
}

$result = $pdo->query('SELECT * FROM articles');
echo '<pre>';

//Voir si la requete est bien exécutée
if ($result) {
    echo "La requête a bien été exécutée";
}
else {
        echo "La requête a échoué";
}
//var_dump($result -> fetchAll()); = afficher les données de la table articles completement
//var_dump($result -> fetch()); = afficher les données de la table articles en une seule ligne
//var_dump($result -> execute()); = permet de voir si la requête est bien exécutée



