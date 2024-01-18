 

    <?php
    //les operateurs de concatenation
     // .= 
    // . concatenation

    $message = "Bonjour ";
    $login = "John";
    $password = "<PASSWORD>";

    $message .= $login;
    $message .= ' , comment allez vous';
    $message .= '<br>';
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <?php
echo $message;
?>
</body>
</html>