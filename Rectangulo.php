<?php


class Rectangulo extends FiguraGeometrica {
    protected $lado2;

    // Constructor
    public function __construct($lado1, $lado2) {
        $this->setLado1($lado1); // lado1 está en la clase padre
        $this->setLado2($lado2);
    }

    // Destructor
    public function __destruct() {}

    public function setLado2($lado) {
        $this->lado2 = $lado;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function calcularArea() {
        return $this->getLado1() * $this->getLado2();
    }

    public function calcularPerimetro() {
        return 2 * ($this->getLado1() + $this->getLado2());
    }

    // Mostrar información del rectángulo
    public function __toString() {
        return "El rectángulo de lados " . $this->getLado1() . " y " . $this->getLado2() . ", tiene un área de: " . $this->calcularArea() . " y un perímetro de: " . $this->calcularPerimetro();
    }
}

?>