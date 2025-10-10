<?php
$figura = $_GET['figura'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introduce los lados</title>
</head>
<body>
    <h1>Introduce los datos para: <?php echo $figura; ?></h1>
    <form action="resultado.php" method="post">
        <input type="hidden" name="figura" value="<?php echo $figura; ?>">
        <?php
        switch ($figura) {
            case 'cuadrado':
                echo '<label>Lado: <input type="number" name="lado" required></label>';
                break;
            case 'rectangulo':
                echo '<label>Lado 1: <input type="number" name="lado1" required></label>';
                echo '<label>Lado 2: <input type="number" name="lado2" required></label>';
                break;
            case 'triangulo':
                echo '<label>Base: <input type="number" name="base" required></label>';
                echo '<label>Altura: <input type="number" name="altura" required></label>';
                break;
            case 'circulo':
                echo '<label>Radio: <input type="number" name="radio" required></label>';
                break;
            default:
                echo 'Figura no válida.';
        }
        ?>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>