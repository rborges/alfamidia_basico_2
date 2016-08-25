<?php

define(MIN, 1);
define(MAX, getrandmax());

$valor1 = rand(MIN, MAX);
$valor2 = rand(MIN, MAX);

if (($valor1 % 2 == 0) && ($valor2 % 2 == 0)) {

    echo "O valor1= $valor1 e valor2= $valor2 são PARES";
} elseif (($valor1 % 2 == 1) || ($valor2 % 2 == 0)) {

    echo "valor1= $valor1 é IMPAR e valor2= $valor2 é PAR";
} elseif (($valor1 % 2 == 0) || ($valor2 % 2 == 1)) {

    echo "valor1= $valor1 é PAR e valor2= $valor2 é IMPAR";
} else {

    echo "Os valores são IMPARES";
}