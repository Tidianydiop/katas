<?php
function palindrome($mot){
$in="";
$palin="";
$long=strlen($mot);
$vrai="vrai";
$faux="faux";

echo "Le mot saisi est:" ," $mot ","\n";
echo "La longueur du mot est:" ," $long ","\n";
if ($long>0){
  for($i=0 ;$i<=$long-1 ; $i++)  {
    $a= (-$i)+($long-1);
  //  echo $a,"\n";
    $in[$i]=$mot[$a];
}
echo "L'inverse du mot  saisi  est:" ," $in ","\n";
}
  if ($in==$mot){
   $palin=$vrai;
  
  }
  else{
   $palin=$faux;
  
  }
 
return $palin ;
}
$mot=readline("Veuillez entrer une chaine de caractère : ");
$M=palindrome($mot);
echo "Le mot  ", "     " ,$mot ,"    ","donnée est un palindrome","   ","est:  " , $M;
?>
