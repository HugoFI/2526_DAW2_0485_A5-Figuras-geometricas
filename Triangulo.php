<?php


class Triangulo extends FiguraGeometrica {
    protected $lado2;
    protected $lado3;

    // Constructor
    public function __construct($lado1, $lado2, $lado3) {
        $this->setLado1($lado1); // lado1 está en la clase padre
        $this->setLado2($lado2);
        $this->setLado3($lado3);
    }

    // Destructor
    public function __destruct() {    }


    public function getLado2() {
        return $this->lado2;
    }
    public function setLado2($valor) {
        $this->lado2 = $valor;
    }


    public function getLado3() {
        return $this->lado3;
    }
    public function setLado3($valor) {
        $this->lado3 = $valor;
    }

    // Área con fórmula de Herón
    public function calcularArea() {
        $a = $this->getLado1();
        $b = $this->getLado2();
        $c = $this->getLado3();
        $s = ($a + $b + $c) / 2;
        return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    }

    // Perímetro
    public function calcularPerimetro() {
        return $this->getLado1() + $this->getLado2() + $this->getLado3();
    }

    // Mostrar información del triángulo
    public function __toString() {
        return "El triángulo con lados " . $this->getLado1() . ", " . $this->getLado2() . ", " . $this->getLado3() . ", tiene un área de: " . $this->calcularArea() . " y un perímetro de: " . $this->calcularPerimetro();
    }
}

?>