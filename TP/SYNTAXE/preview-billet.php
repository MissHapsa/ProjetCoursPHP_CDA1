<?php
session_start();

// Vérifier si le titre et le contenu existent dans la session
if(empty($_SESSION['titre_article']) || empty($_SESSION['contenu_article'])){
    // Rediriger vers la page d'écriture si les informations sont manquantes
    echo("Vous n'avez rien saisi, veuillez retourner sur cette page pour terminer votre saisie: <a href='ecrire-billet.php'>Retour</a>");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prévisualisation du billet</title>
</head>
<body>

    <h2>Prévisualisation du billet</h2>

    <h3><?php echo $_SESSION['titre_article']; ?></h3>
    <p><?php echo $_SESSION['contenu_article']; ?></p>


</body>
</html>
