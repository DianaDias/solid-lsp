<?php

namespace Murph\SolidLsp;

class Poligonos{

    protected $forma;

    public function setForma(object $forma): void
    {
        $this->forma = $forma;
    }

    public function getForma(): object
    {
        return $this->forma;
    }
    
    public function calcularMedidaPoligano(): float
    {
        $valor = ($this->forma->getAltura() * $this->forma->getLargura());
        return $valor;
    }    
}