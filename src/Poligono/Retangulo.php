<?php

namespace Murph\SolidLsp\Poligono;

class Retangulo{
    protected $altura;
    protected $largura;

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function calcularMedidaPoligano(): float
    {
        $valor = ($this->getAltura() * $this->getLargura());
        return $valor;
    }
}