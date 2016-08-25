<?php

$valores1 = array("String", 1234, array('a', 2, 'c',array(1,2,3)));
$valores2 = ["String", 1234, ['a', 2, 'c', [1,2,3]]];


echo $valores1[0];
echo "<br/>";
echo $valores2[1];
echo "<br/>";
echo $valores1[2];
echo "<br/>";
echo $valores1[2][0];
echo "<br/>";
echo $valores1[2][1];
echo "<br/>";
echo $valores1[2][3];
echo "<br/>";
echo $valores1[2][3][1];
echo "<br/>";
echo $valores2[2][3][2];

echo "<br/>";
var_dump($valores1);
echo "<br/>";
echo "<br/>";
echo "<br/>";
print_r($valores2);