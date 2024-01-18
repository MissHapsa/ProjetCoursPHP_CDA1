<?php

// la boucle do while en php 
$loop = false;
while($loop) {  // tant que la condition est vraie
    echo "Hello World";

    if ($loop == false) {
        break;
    }
}

$loop = false;
do { // tant que la condition est vraie
    echo "Hello World";
}
