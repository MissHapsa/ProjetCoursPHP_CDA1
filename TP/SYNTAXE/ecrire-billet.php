<?php
session_start();

// Vérifier si le bouton "Remise à zéro" a été cliqué
if(isset($_POST['reset'])){
    unset($_SESSION['titre_article']);
    unset($_SESSION['contenu_article']);
}

// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])){
    // Stocker les valeurs du formulaire dans la session
    $_SESSION['titre_article'] = $_POST['titre_article'];
    $_SESSION['contenu_article'] = $_POST['contenu_article'];
    
    // Rediriger vers la page de prévisualisation
    header("Location: preview-billet.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Écrire un billet</title>
</head>
<body>

    <h2>Écrire un billet</h2>

    <form method="post" action="ecrire-billet.php">
        <label for="titre_article">Titre de l'article:</label>
        <input type="text" id="titre_article" name="titre_article" value="<?php echo isset($_SESSION['titre_article']) ? $_SESSION['titre_article'] : ''; ?>"><br>

        <label for="contenu_article">Contenu:</label>
        <textarea id="contenu_article" name="contenu_article"><?php echo isset($_SESSION['contenu_article']) ? $_SESSION['contenu_article'] : ''; ?></textarea><br>

        <input type="submit" name="submit" value="Prévisualiser">
        <input type="submit" name="reset" value="Remise à zéro">
    </form>

</body>
</html>
