<?php

require __DIR__."/vendor/autoload.php";

use Murph\SolidLsp\Poligonos\Retangulo;
use Murph\SolidLsp\Poligonos\Quadrado;
use Murph\SolidLsp\Poligonos;

$poligonosRetangulo = new Poligonos();
$poligonosRetangulo->setForma(new Retangulo());
$poligonosRetangulo->getForma()->setAltura(2);
$poligonosRetangulo->getForma()->setLargura(5);
$resultadoRetangulo = $poligonosRetangulo->calcularMedidaPoligano();

echo '============ Calcula area do retângulo ===============</br>';
print_r($resultadoRetangulo);

$poligonosQuadrado = new Poligonos();
$poligonosQuadrado->setForma(new Quadrado());
$poligonosQuadrado->getForma()->setAltura(4);
// $poligonosQuadrado->getForma()->setLargura(4);
$resultadoQuadrado = $poligonosQuadrado->calcularMedidaPoligano();

echo '</br></br>============ Calcula area do quadrado ===============</br>';
print_r($resultadoQuadrado);

