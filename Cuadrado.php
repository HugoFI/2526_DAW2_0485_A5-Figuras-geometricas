<?php


class Cuadrado extends FiguraGeometrica {
    // Constructor con el lado
    public function __construct($lado) {
        $this->setLado1($lado); 
    }

    // Destructor
    public function __destruct() { }

    public function calcularArea() {
        return $this->getLado1() * $this->getLado1();
    }

    public function calcularPerimetro() {
        return 4 * $this->getLado1();
    }

    // Mostrar información del cuadrado
    public function __toString() {
        return "El cuadrado de lado " . $this->getLado1() . ", tiene un área de: " . $this->calcularArea() . " y un perímetro de: " . $this->calcularPerimetro();
    }
}



?>