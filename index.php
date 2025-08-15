<?php

require __DIR__."/vendor/autoload.php";

use Murph\SolidLsp\Poligono\Retangulo;
use Murph\SolidLsp\Poligono\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(2);
$retangulo->setLargura(5);
$resultadoRetangulo = $retangulo->calcularMedidaPoligano();

echo '============ Calcula area do retângulo ===============</br>';
print_r($resultadoRetangulo);

$quadrado = new Quadrado();
// $quadrado->setAltura(4);
$quadrado->setLargura(4);
$resultadoQuadrado = $quadrado->calcularMedidaPoligano();

echo '</br></br>============ Calcula area do quadrado ===============</br>';
print_r($resultadoQuadrado);

