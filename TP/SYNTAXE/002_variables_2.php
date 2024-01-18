<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables tableau</title>
</head>
<body>
    <h1>variables tableau</h1>

    <?php 
    
    $aliments = array(
        'pomme' => 'fruit',
        'banane' => 'fruit',
        'poire' => 'fruit',
        'poireau' => 'legume',
        'cerise' => 'legume',
        'salade' => 'legume'
    );
    
    echo $aliments['pomme']; 




    $tableau = array(
        'fruits' => array(
        'pomme',
        'banane',
        'poire'), 

        'legume' => array(
        'poireau',
        'cerise',
        'salade')
    );

    echo $tableau['fruits'][2];
 ?>
</body>
</html>