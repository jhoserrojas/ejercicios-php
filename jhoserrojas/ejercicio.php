<?php

$var = intval(readline("ingrese la cantidad \n"));
$VAR= 50000 ;


$numero=($var >= 3) ? ($VAR-($VAR*20/100))*$var : ($VAR-($VAR*10/100))*$var ;
 echo "$numero";

?>