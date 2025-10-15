<?php

class Circulo extends FiguraGeometrica {
    public function calcularArea() {
        return pi() * pow($this->lado1, 2); // lado1 es el radio
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->lado1; // lado1 es el radio
    }

    public function __toString() {
        return "El círculo de radio " . $this->getLado1() . ", tiene un área de: " . $this->calcularArea() . " y un perímetro de: " . $this->calcularPerimetro();
    }
}

?>