<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $var = array (
        'pomme' => 'cool',
        'autres' =>   array (
            'banane' => 'cool aussi', 
            'poireau' => ' moins cool'
        )
        );

    // balise pre  permet de mettre du code en formatage  
    echo "<pre>";
    print_r($var);
    echo "</pre>";

    // balise var_dump permet de mettre du code en formatage
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    // balise exit  
    exit();

    // balise die permet de stopper le script
    die();
    // balise die permet de stopper le script et de mettre un message
    die("stop");
    

   


    ?>

    
</body>
</html>