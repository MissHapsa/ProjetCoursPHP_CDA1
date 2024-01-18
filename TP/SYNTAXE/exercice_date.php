<?php
//À l'aide de la fonction date(), affichez dans une liste la date du jour, sous différentes formes :
    // 1. 10/10/2024
    //2. 2024-10-10
    // 3. Le 10/10 à 10h30
    // 4. Il est exactement 10:30 et 35 seconde(s)
    // Bonus : Prenez en compte le "s" qui apparaîtra uniquement au pluriel
   
    $date1 = date('10/10/2024');
    echo $date1;
    echo '<br>';
    $date2 = date('Y-m-d');
    echo $date2;
    echo '<br>';
    $date3 =  date('d/m 10:30:00 A');
    echo $date3;
    echo '<br>';
        // 4. Il est exactement 10:30 et 35 seconde(s)
    $date4 = "il est exactement". date('10:30:35'). "seconde(s)";
    echo $date4;
    echo '<br>';
    $date5 = date('h:i:s');
    echo $date5;
    echo '<br>';
 
    ?>
