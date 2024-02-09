<?php
$Nbre=[5];
$tab=[2];
    function tabnbre($Nbre){
            for($i=0;$i<5;$i++){
                for($j=$i+1;$j<5;$j++){
                    if($Nbre[$i]>$Nbre[$j]){
                    $tmp=$Nbre[$i];
                    $Nbre[$i]= $Nbre[$j];
                    $Nbre[$j]=$tmp;	
                            }
                        }
                     }

        $tab[0]=$Nbre[0];
        $tab[1]=$Nbre[4];
        $tab =  $tab[0].$tab[1];
             
             return  $tab;        
        }
echo " Veuillez saisir les éléments du tableau N : \n";	
for($i=0;$i<5;$i++){
    $Nbre[$i]=(int)readline (" ");
        }
    $M=tabnbre($Nbre);
     echo "Le minimum et le maximum du tableau sont :", $M;
?>