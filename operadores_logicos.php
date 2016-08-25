<?php

echo "<h2>Operadores Lógicos</h2>";

$v1 = TRUE;
$v2 = FALSE;

compara($v1, $v2);

function compara($v1, $v2) {

    if ($v1 AND $v2) {

        echo "V1 E V2 são iguais<br/>";
    }
    if ($v1 OR $v2) {

        echo "V1 ou V2 são verdadeiros<br/>";
    }
    if ($v1 XOR $v2) {

        echo "V1 ou V2 são verdadeiros mas não ambos<br/>";
    }
    if (!$v1) {

        echo "A negação de V1 é " . (!$v1) . "<br/>";
    }
    if ($v1 && $v2) {

        echo "V1 e V2 são iguais<br/>";
    }
    if ($v1 || $v2) {

        echo "V1 ou V2 são VERDADEIROS<br/>";
    }
}

?>