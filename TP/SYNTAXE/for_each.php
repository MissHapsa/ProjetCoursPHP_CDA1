<?php

// le for each permet de parcourir les valeurs d'un tableau
// 
$pins = array(
    'red',
    'blue',
    'pink',
    'yellow',
    'black'
);

$countPins = count($pins);
    for($i=0; $i<$countPins; $i++){
        echo $pins[$i]. "<br>";
    }


// avec foreach
foreach($pins as $pin){
    echo $pin. "<br>";
}

$cookies = [
    'Damien' => 'chocolat',
    'Line' => 'nougat',
    'Loic' => 'noisettes'
    ];

    foreach($cookies as $key => $value){
        echo "$key a acheté $value <br>";
    }
