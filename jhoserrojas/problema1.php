<?php
$var1= intval(readline("ingrese cantidad que desea comprar \n"));
$VAR= 700;
$var2= $VAR-($VAR*0.10);
$var3=$VAR-($VAR*0.20);
$var4=$VAR-($VAR*0.40);
if ($var1< 5){
    $resul= $var2*$var1;
    echo "se le aplicara un descuento del 10% por la compra de $var1 y su total a pagar sera: $resul";
}

if (($var1 >= 5 ) AND ($var1 <= 10)){
    $resul2= $var3*$var1;
    
    echo"si por su compra de $var1 se le aplicara  un descuento del 20% y su total a pagar sera :$resul2";
}
   
if ($var1 >=11){
    $resul3= $var4*$var1;
 echo"por la compra del $var1 se le aplicara un descuento del 40% y su total a pagar sera : $resul3 "; 
}
?>