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

switch ($figura) {
    case 'cuadrado':
        
        break;

    case 'rectangulo':
        
        break;
    
    case 'triangulo':
        
        break;
        
        
        default:
        echo "Figura no reconocida.";
        exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Figura Geométrica</title>
</head>
<body>
    <h1>Resultado</h1>
    <ul>
        <li><strong>Tipo de figura:</strong> <?php echo ucfirst($figura); ?></li>
        
        
    </ul>
    <a href="index.php">Volver al inicio</a>
</body>
</html>