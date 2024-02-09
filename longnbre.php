<?php
function longnbre($nbre){
    $long=strlen($nbre);
    return $long;
}
$nbre= (int )readline ("Veuillez saisir un nombre entier positif:" );
$N=longnbre($nbre);
echo "la longueur du nombre" ,"  ",$nbre, "  " ,"saisi est : ",$N;
?>