<?php
//  1. Dans le fichier functions.php :
		// Créez une fonction `the_content()` qui affiche le contenu d'un
		// article, stocké dans la variable $currentArticle (voir le code
		// ci-dessous) -->
        function the_title() {
            global $currentArticle;
            echo $currentArticle['title'];
        }


        function the_content() {
            global $currentArticle;
        echo '<p>'. $currentArticle['content'] .'</p>';
    }
    
    // Cette fonction n'acceptera aucun argument.
    
    // Complétez ce script pour afficher une page web simple et
    // appelez la fonction `the_content()` au bon endroit.

   
