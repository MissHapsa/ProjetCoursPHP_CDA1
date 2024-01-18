<!--2. Créez un deuxième fichier `page.php` qui affiche 5 fois cette image. Utilisez pour cela la fonction include.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page avec l image</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 5; $i++) {
            include('image.html');
        }
    ?>
</body>
</html>