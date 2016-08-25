<?php

class Televisor {

    public $marca;
    public $tamanho;
    public $voltagem;

    function ligar() {
        echo "A televisão $this->marca está ligada em $this->voltagem Volts."
        . "<br/>Ela tem $this->tamanho\"<br/><br/><br/> ";
    }

}

$obj1 = new Televisor;
$obj2 = new Televisor;
$obj3 = new Televisor;

$obj1->marca = "Samsung";
$obj1->tamanho = "42";
$obj1->ligar();

$obj2->marca = "LG";
$obj2->tamanho = "60";
$obj2->voltagem = "127";
$obj2->ligar();

$obj3->marca = "Panasonic";
$obj3->tamanho = "50";
$obj3->voltagem = "127";
$obj3->ligar();

