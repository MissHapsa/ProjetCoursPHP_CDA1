<?php

// la boucle while en php
$i = 0;
while($i < 10){ //tant que i est inferieur a 10
    echo $i;
    $i++;
}
echo $i; // affiche 10

$i = 0;
while(true) { // tant que la condition est vraie
    echo $i;

    if ($i > 10) {
        break;
    }
    $i++;
}

?>