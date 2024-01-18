<?php
// filter var permet de filtrer les donnees dans un formulaire  
// elle effectue aussi le nettoyage des donnees de tous les caracteres interdits
// verifier que les donnees correspondent aux type de variable attendu par la requette

$string = "Je suis a Paris pour la journee";
$sanitazedString = htmlspecialchars($string);
echo $sanitazedString;
echo "<br>";



$string = "Je suis a Bordeaux pour la journee";
$textstring = strip_tags($string);
echo $textstring;
echo "<br>";


$ip = "192.168.1.1";
$valifIp = filter_var($ip, FILTER_VALIDATE_IP);

if ($valifIp) {
    echo "L'ip est valide";
} else {
    echo "L'ip est invalide";
}	
echo "<br>";


$email = "loca lguide@gmail.com";
$valideEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

if ($valideEmail) {
    echo $valideEmail;
    echo "<br>";
    echo "L'email est valide";
} else {
    echo "L'email est invalide";
}



