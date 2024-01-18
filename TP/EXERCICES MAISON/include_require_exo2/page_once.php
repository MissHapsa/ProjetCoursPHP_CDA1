<!-- 3. Remplacez maintenant votre fonction d'inclusion par sa version`_once`. Que se passe-t-il ? -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page avec l image(include_once)</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 5; $i++) {
            include_once('image.html');
        }
    ?>
    <!-- meme si on specifie une boucle x 5 , on affiche l image que une fois grace a include_once -->
</body>
</html>