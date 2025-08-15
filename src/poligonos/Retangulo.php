<?php

namespace Murph\SolidLsp\Poligonos;

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

}