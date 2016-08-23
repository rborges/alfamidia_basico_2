<?php

echo "STRING";
echo strMinusculo("");

$str = "STRING";
echo $str;

echo strMinusculo($str);
echo strMinusculo("UMA STRING EM PORTUGUES.");

echo $str;



function strMinusculo($str)
{

	return "<br/>".strtolower($str)."<br/>";
	
}