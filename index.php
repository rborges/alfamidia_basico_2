<?php 
echo "<h2>Operadores de Atribuição</h2>";
echo "<br/>Atribui 10 a variavel valor<br/>";
echo $valor = 10;

echo "<br/>Soma 20  a  $valor <br/>";
echo $valor += 20;

//$valor = $valor +20;

echo "<br/>Subtrai 5  a  $valor <br/>";
echo $valor -= 5;

echo "<br/>Multiplica por 4 a  $valor <br/>";
echo $valor *= 4;

echo "<br/>Divide por 10  a  $valor <br/>";
echo $valor /= 10;

echo "<br/>";

echo "<h2>Incremento</h2>";
echo $valor++ ."<br/>";
echo $valor."<br/>";

echo ++$valor."<br/>";
echo $valor."<br/>";


echo "<h2>Decremento</h2>";
echo $valor-- ."<br/>";
echo $valor."<br/>";

echo --$valor."<br/>";
echo $valor."<br/>";

echo "<h2>Operadores Aritméticos</h2>";

$v1 = 10;
$v2 = 8;

echo "Adição V1 + V2 = ". ($v1 + $v2)."<br/>";
echo "Subtração V1 - V2 = ". ($v1 - $v2)."<br/>";
echo "Multiplicação V1 * V2 = ". $v1 * $v2."<br/>";
echo "Divisão V1 / V2 = ". $v1 / $v2."<br/>";
echo "Modulo V1 % V2 = ". ($v1 % $v2)."<br/>";

?>