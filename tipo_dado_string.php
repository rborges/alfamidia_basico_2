<?php

echo "<h2>Tipo de Dados::String</h2>";

$nome = "Rodrigo";

$v1 = 'Meu nome é Rodrigo<br/>';
$v2 = "\"Meu nome \\ é \nRodrigo<br/>";

$v3 = "Meu nome é $nome<br/>";
$v4 = 'Meu nome é $nome<br/>';

echo $v1;
echo $v2;
echo $v3;
echo $v4;

print $v1;
print $v2;
print $v3;
print $v4;

