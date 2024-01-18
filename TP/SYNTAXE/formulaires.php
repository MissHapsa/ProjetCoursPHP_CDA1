<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- creer un formulaire avec un champs texte et un bouton submit -->
    

    <form action="index.php" method="post">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="text" name="age">
        <input type="text" name="email">

        <input type="submit" value="Envoyer">  
    </form>
    <?php
    // la variable POST  si la methode est post
    // la variable GET si la methode est get

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];

    
    ?>
</body>
</html>