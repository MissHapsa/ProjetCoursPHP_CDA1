<!-- verifier il ya des variables sont present dans le formulaire -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'il manque le champs';
    exit;}

$error = false;
$errormessages = [];

    
    // je verifie si il ya un sujet, si oui filtrer la valeur

    if (isset($_POST['subject'])) && !empty($_POST['subject'])) {
      $error = true;
        $errormessages[] = 'le champs sujet est vide';
    } else {
        $subject = htmlentities($_POST['subject']); // securisation de la donnees
    }


    // je verifie si il ya un message, si oui filtrer la valeur
    if (isset($_POST['message'])) && !empty($_POST['message'])) {
        $error = true;
        $errormessages[] = 'le champs message est vide';
    } else {
        $message = htmlentities($_POST['message']); // securisation de la donnees
    }

    // je verifie si il ya une email 
    if (isset($_POST['emailform'])) && !empty($_POST['emailform'])) {   
        $error = true;
        $errormessages[] = 'le champs email est vide';
    } else {
        $email = htmlentities($_POST['emailform']); // securisation de la donnees
    }
    // je verifie si l email est valide
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $errormessages[] = 'l email est invalide';
        }

    // SI TOUT EST OK on envoi un email avec comme destinataire l administrateur du site
    // si pas OK on affiche un message d erreur

    
    
    
    
    
    
    
    
    
    ?>