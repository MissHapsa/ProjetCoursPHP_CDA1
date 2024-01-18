<?php
// mktime() permet de creer un timestamp unix avec les differents parametres
// http://php.net/manual/fr/function.mktime.php 
$date1 = mktime(12,0,0,10,10,2014);
echo date('d/m/Y',$date1);
echo '<br>';
$date2 = mktime(12,0,0,10,10,2015);
echo date('d/m/Y',$date2);  
echo '<br>';