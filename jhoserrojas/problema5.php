

<?php
/*Escribe un programa que solicite al usuario que ingrese dos números. Luego, el programa debe imprimir si ambos
números son mayores que 10 utilizando la sentencia if y los operadores lógicos "&&" y ">". Si ambos números son
mayores que 10, el programa debe imprimir "Ambos números son mayores que 10". Si solo uno de los números es
mayor que 10, el programa debe imprimir "Solo uno de los números es mayor que 10". Si ninguno de los números
es mayor que 10, el programa debe imprimir "Ninguno de los números es mayor que 10".*/
$numeor1= intval(readline("ingrese un numero \n"));
$numeor2= intval(readline("ingrese un numero \n"));

if($numeor1 > 10 && $numeor2 >10):
echo"ambos numeros son mayores que 10";
endif;
 if($numeor1 <11 && $numeor2 >=11):
    echo"solo uno de los numero es mayor que 10 \n";
 endif;
 if($numeor1 >=11 && $numeor2 <11):
    echo"solo uno de los numero es mayor que 10 \n";
 endif;
 if($numeor1 <=10 && $numeor2 <=10):
    echo"ninguno  de los numero es mayor que 10 \n";
 endif;
?>