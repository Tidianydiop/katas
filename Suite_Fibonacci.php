<?
$n=(int )readline ("Veuillez saisir un nombre :  \n");
function suite($n){
$U=[$n];
$U[0]=0;
$U[1]=1;
    for($i=2;$i<$n;$i++){
        $U[$i]  =  $U[$i-1] +  $U[$i-2];
       // echo $U[$i];
    }
   // for($i=0;$i<$n;$i++){
      $U = $U[0].$U[1].$U[2].$U[3].$U[4].$U[5].$U[6].$U[7].$U[8].$U[9];
       // echo $p;
       return $U;    
  // }
    
    //echo  $U[$i]; 
}
//$n=(int )readline ("Veuillez saisir un nombre :  \n");
$H=suite($n);
echo "Les " ,$n," premiers termes de la suite sont:" , $H ;
?>