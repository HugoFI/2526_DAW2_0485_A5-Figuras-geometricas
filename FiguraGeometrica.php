<?php

class FiguraGeometrica {
    protected $lado1;
    protected $lado2;

    public function __construct($lado1, $lado2 = null) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }

    public function setLado1($lado) {
        $this->lado1 = $lado;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function calcularArea() {
        return 0; // Esta de forma generica para usarse en las subclases
    }

}






?>