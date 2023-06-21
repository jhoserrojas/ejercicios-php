<?php
$numero= intval(readline("ingrese un numero "));

if(($numero >= 10) or ($numero < 10)){
    echo " su numero es $numero \n";
}
/* si el nombre si coincide con la $var"juan"
mostrara el if y si  no coincide mostrara el else */
$nombre= readline("ingrese su nombre\n");
$var= "juan";
$JUAN= "Hola juan Bienvenido\n";
 if($nombre == $var ){
    echo "$JUAN";
}
else{
    echo"Lo siento no te conozco \n";
    }

    $a= intval(readline("ingrese un numero del 1 al 7 \n"));
   $b= "lunes\n";
   $b2= "martes \n";
   $b3= "miercoles \n";
   $b4="jueves \n";
   $b5="viernes \n";
   $b6="sabado \n";
   $b7="domingo \n";
   if($a==1){
    echo"$b";
   }
   elseif ($a == 2){
    echo"$b2";
       }
       elseif ($a == 3){
    echo"$b3";
       }
       elseif ($a == 4){
    echo"$b4";
       }
       elseif ($a == 5){
    echo"$b5";
       }
       elseif ($a == 6){
    echo"$b6";
       }
       elseif ($a == 7){
    echo"$b7";
       }
   else{
    echo "numero invalido\n";
   }
  
 ?>
  