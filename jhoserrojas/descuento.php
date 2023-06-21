<?php
$nombre= readline("Ingrese su nombre \n");
$apellido= readline("Ingrese su apellido \n ");
echo"Bienvendio: $nombre $apellido";
?>

<?php
$numero1= readline("Ingrese el numero que desea sumar \n");
$numero2= readline("Ingrese el numero que desea sumar \n");
$suma= $numero1+$numero2;
echo"la suma de $numero1+$numero2 es igual a: $suma";
?>

<?php
$numero1= readline("Ingrese el numero que desea sumar,restar,multiplicar\n");
$numero2= readline("Ingrese el numero que desea sumar,restar,multiplicar\n");
$suma= $numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
echo"la suma de $numero1+$numero2 es igual a: $suma, la resta entre $numero1-$numero2 es igual a: $resta, la multiplicacion entre $numero1*$numero2 es igual a:$multiplicacion";
?>

<?php
$nombre= readline("Ingrese su nombre \n");
$sueldo= readline("Ingrese su sueldo sin puntos \n");
$aumento=$sueldo*15/100;
echo"estimado señor $nombre se le informa que su sueldo de $sueldo se le aplicado un aumento del 15% es con gratidtud informarle que su suledo actual es de:$aumento";
?>


