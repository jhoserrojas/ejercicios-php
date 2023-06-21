<?php 
$nombre=readline("ingre su nonbre \n");
$edad= intval(readline("ingrese su edad \n"));
   $si= "si";
   $no="no";
if($edad >= 18):
 ($readline=readline("tiene licencia \n"));

 if($readline == $no):
   echo"estimado señor $nombre, debes tener lincecia";
 endif;
 if($readline == $si):
   echo" estimado señor $nombre, puedes conducir";
 endif;
else :
   echo" no puedes conducir";
endif;

 ?>