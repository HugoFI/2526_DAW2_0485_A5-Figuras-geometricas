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
            // Mostrar resultado usando __toString() de cada clase
            switch ($figura) {
                case 'cuadrado':
                    $lado = $_POST['lado'] ?? '';
                    if ($lado !== '') {
                        $obj = new Cuadrado($lado);
                        echo '<div class="mb-3">' . $obj . '</div>';
                    } else {
                        echo '<div class="alert alert-danger">Falta el lado del cuadrado.</div>';
                    }
                    break;
                case 'rectangulo':
                    $lado1 = $_POST['lado1'] ?? '';
                    $lado2 = $_POST['lado2'] ?? '';
                    if ($lado1 !== '' && $lado2 !== '') {
                        $obj = new Rectangulo($lado1, $lado2);
                        echo '<div class="mb-3">' . $obj . '</div>';
                    } else {
                        echo '<div class="alert alert-danger">Faltan lados del rectángulo.</div>';
                    }
                    break;
                case 'triangulo':
                    $lado1 = $_POST['lado1'] ?? '';
                    $lado2 = $_POST['lado2'] ?? '';
                    $lado3 = $_POST['lado3'] ?? '';
                    if ($lado1 !== '' && $lado2 !== '' && $lado3 !== '') {
                        $obj = new Triangulo($lado1, $lado2, $lado3);
                        echo '<div class="mb-3">' . $obj . '</div>';
                    } else {
                        echo '<div class="alert alert-danger">Faltan lados del triángulo.</div>';
                    }
                    break;
                case 'circulo':
                    $radio = $_POST['radio'] ?? '';
                    if ($radio !== '') {
                        $obj = new Circulo($radio);
                        echo '<div class="mb-3">' . $obj . '</div>';
                    } else {
                        echo '<div class="alert alert-danger">Falta el radio del círculo.</div>';
                    }
                    break;
                default:
                    echo '<div class="alert alert-danger">Figura no válida.</div>';
            }
            ?>
            <div class="d-grid mt-4">
                <form action="introducir_lados.php" method="get" class="mb-2">
                    <input type="hidden" name="figura" value="<?php echo $figura; ?>">
                    <button type="submit" class="btn btn-secondary btn-lg">Editar lados</button>
                    <a href="./index.php" class="btn btn-primary btn-lg">Volver al inicio</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>