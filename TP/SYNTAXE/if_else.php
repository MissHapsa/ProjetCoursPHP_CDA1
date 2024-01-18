<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //structure d une condition if else en PHP

    $condition = true;
    $condition = false;
    $condition = 'chaine de caractere'; // true
    $condition = ''; // false


    $condition = 1; // true
    $condition = 0; // false
    $condition = 1.0; // true
    $condition = -1 ; // false

    if ($condition) {
        echo $condition;
    } 

    ?>

    <section>
    <?php if ($condition) {echo "AFFICHE"; } else {echo "NE PAS AFFICHE";}
    ?>
    </section>
    
</body>
</html>