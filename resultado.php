<?php

require_once 'FiguraGeometrica.php';
require_once 'Cuadrado.php';
require_once 'Rectangulo.php';
require_once 'Triangulo.php';
require_once 'Circulo.php';

if (!isset($_POST['figura'])) {
    echo "No se ha seleccionado ninguna figura.";
    exit;
}

$figura = $_POST['figura'];
$lado1 = isset($_POST['lado1']) ? floatval($_POST['lado1']) : null;
$lado2 = isset($_POST['lado2']) ? floatval($_POST['lado2']) : null;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow custom-card w-100" style="max-width: 400px;">
            <h2 class="text-center mb-4">Resultado</h2>
            <?php
            
            $figura = $_POST['figura'] ?? '';
            echo '<div class="mb-3"><strong>Figura:</strong> ' . $figura . '</div>';
            switch ($figura) {
                case 'cuadrado':
                    $lado = $_POST['lado'] ?? '';
                    echo '<div class="mb-3"><strong>Lado:</strong> ' . $lado . '</div>';
                    echo '<div class="mb-3"><strong>Área:</strong> ' . $lado * $lado . '</div>';
                    echo '<div class="mb-3"><strong>Perímetro:</strong> ' . 4 * $lado . '</div>';
                    break;
                case 'rectangulo':
                    $lado1 = $_POST['lado1'] ?? '';
                    $lado2 = $_POST['lado2'] ?? '';
                    echo '<div class="mb-3"><strong>Lado 1:</strong> ' . $lado1 . '</div>';
                    echo '<div class="mb-3"><strong>Lado 2:</strong> ' . $lado2 . '</div>';
                    echo '<div class="mb-3"><strong>Área:</strong> ' . $lado1 * $lado2 . '</div>';
                    echo '<div class="mb-3"><strong>Perímetro:</strong> ' . 2 * ($lado1 + $lado2) . '</div>';
                    break;
                case 'triangulo':
                    $base = $_POST['base'] ?? '';
                    $altura = $_POST['altura'] ?? '';
                    echo '<div class="mb-3"><strong>Base:</strong> ' . $base . '</div>';
                    echo '<div class="mb-3"><strong>Altura:</strong> ' . $altura . '</div>';
                    echo '<div class="mb-3"><strong>Área:</strong> ' . ($base * $altura) / 2 . '</div>';
                    echo '<div class="mb-3"><strong>Perímetro:</strong> ' . $base + 2 * sqrt(($base ** 2) + ($altura ** 2)) . '</div>';
                    break;
                case 'circulo':
                    $radio = $_POST['radio'] ?? '';
                    echo '<div class="mb-3"><strong>Radio:</strong> ' . $radio . '</div>';
                    echo '<div class="mb-3"><strong>Área:</strong> ' . (pi() * ($radio ** 2)) . '</div>';
                    echo '<div class="mb-3"><strong>Perímetro:</strong> ' . (2 * pi() * $radio) . '</div>';
                    break;
                default:
                    echo '<div class="alert alert-danger">Figura no válida.</div>';
            }
            ?>
            <div class="d-grid mt-4">
                <a href="./introducir_lados.php" class="btn btn-secondary">Editar lados</a>
                <br>
                <a href="./index.php" class="btn btn-primary btn-lg">Volver al inicio</a>
            </div>
        </div>
    </div>
</body>
</html>