<?php
$intedad = 21;
$fltdinero = 1023.23;
$strnombre ="hola mundo";
$esmayordeedad = true;
$vcolores = array('blue', 'red', 'green');

//hungaro camello

$intedad2 ="21";


//comparaciones


//  == comparacion de valor
//===compracion de tipo de dato y valor
if ($intedad2 === $intedad) {

    //expresion si condicion ==true
} else {
    //expresion si condicion ==false
}

//!= desigualdad de valor
//!== desigualdad de tipo de dato y valor

// && and
// || or


switch($intedad) {
    case 21:
    $esmayordeedad =true;
    break;
    default:
    $esmayordeedad = false;

   
}

$esmayordeedad = ( $intedad >=21) ? true : false;

//operadores aritmeticos

//operadores aritmeticos
//+ =/*

$intnumero1 =100;
$intnumero2 = 5;
$intresultado =0;

$intresultado = $intnumero1 + $intnumero2;

//105

$intresultado = $intnumero1 - $intnumero2;

$intresultado = $intnumero1 * $intnumero2;

$intresultado = $intnumero1 / $intnumero2;

// operadores aritmeticos medio avanzados
$intresultado = 10;
$intresultado += 4;

//14 +=acumulador

$intresultado-=4;
//10 -= decrementa

$intresultado *=2;
//20
$intresultado /=2;
//10
$intresultado ++;
//11
$intresultado ==2;
//10
$intresultado = $intresultado ** 3;
//1000
print_r($intresultado);
echo '<br/v';

$fltresultado = $intresultado%3;
//.3333333333333

for ($i=0; $i < 100; $i ++) {
    //iteracion de 100

}

$i =0;
while ($i < 100) {
    $i++;
}

do {

}while ($i < 100);

// reglas de los arreglos en php
// arreglos asociativos ==== listas dinamicamente ligadas
//$vcolores

//int[3] vectornumero;
//vectornumero[1] =1;
//vectornumero[0] =2;
//vectornumero[2] =3;



print_r($vcolores);
echo '<br/v';

$vcolores[] ="purple";// php agrega el valor con el siguiente
//ordinal disponible al final del arreglo

print_r($vcolores);

echo '<br/v';
$vclores["favoritos"] = "tornasol";//php agrega el valor asociado
//con la llave favorito

print_r($vcolores);
echo '<br/>';

$vcolores[] ="orange";// php agrega el valor con el siguiente
//ordinal disponible al final del arreglo
echo '<br/>';
/*no se debe recorrer asi el arereglo
for(var $i = o; $i <count($svcolores); $i++) {

echo $svcolores[$i]. " | ";

}
*/
foreach($vcolores as $elementos){

    echo $elementos;
}


?>