<?
$n=(int )readline ("Veuillez saisir un nombre :  \n");
function suite($n){
     if($n==0){
        return 0;
     }
        else if($n==1){
            return 1;
        }
            else
            return (suite($n-1)+suite($n-2));

        }

        
     for($i=0;$i<=$n;$i++){
        $H=suite($i). "  ";
        echo $H ; 
}
?>