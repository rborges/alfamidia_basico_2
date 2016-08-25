<?php
echo "<h2>Operadores Relacionais</h2>";

$v1 = 10;
$v2 = 20;

compara($v1, $v2);

function compara($v1, $v2) {

    if ($v1 == $v2) {

        echo "V1 é IGUAL a V2<br/>";
    }
    if ($v1 === $v2) {

        echo "V1 é IDENTICO em valor e tipo a V2<br/>";
    }
    if ($v1 != $v2) {

        echo "V1 NÃO é igual a V2<br/>";
    }
    if ($v1 !== $v2) {

        echo "V1 NÃO é IDENTICO a V2<br/>";
    }
    if ($v1 < $v2) {

        echo "V1 é MENOR que V2<br/>";
    }
    if ($v1 > $v2) {

        echo "V1 é MENOR que V2<br/>";
    }
    if ($v1 <= $v2) {

        echo "V1 é MENOR ou IGUAL que V2<br/>";
    }
    if ($v1 <= $v2) {

        echo "V1 é MAIOR ou IGUAL que V2<br/>";
    }
}

?>