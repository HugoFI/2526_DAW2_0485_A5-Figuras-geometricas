<?php
$figura = $_GET['figura'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introduce los lados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow custom-card w-100" style="max-width: 400px;">
            <h2 class="text-center mb-4">Introduce los datos para: <?php echo $figura; ?></h2>
            <form action="resultado.php" method="post">
                <input type="hidden" name="figura" value="<?php echo $figura; ?>">
                <?php
                switch ($figura) {
                    case 'cuadrado':
                        echo '<div class="form-floating mb-3"><input type="number" class="form-control" id="lado" name="lado" required placeholder="Lado"><label for="lado">Lado</label></div>';
                        break;
                    case 'rectangulo':
                        echo '<div class="form-floating mb-3"><input type="number" class="form-control" id="lado1" name="lado1" required placeholder="Lado 1"><label for="lado1">Lado 1</label></div>';
                        echo '<div class="form-floating mb-3"><input type="number" class="form-control" id="lado2" name="lado2" required placeholder="Lado 2"><label for="lado2">Lado 2</label></div>';
                        break;
                    case 'triangulo':
                        echo '<div class="form-floating mb-3"><input type="number" class="form-control" id="base" name="base" required placeholder="Base"><label for="base">Base</label></div>';
                        echo '<div class="form-floating mb-3"><input type="number" class="form-control" id="altura" name="altura" required placeholder="Altura"><label for="altura">Altura</label></div>';
                        break;
                    case 'circulo':
                        echo '<div class="form-floating mb-3"><input type="number" class="form-control" id="radio" name="radio" required placeholder="Radio"><label for="radio">Radio</label></div>';
                        break;
                    default:
                        echo '<div class="alert alert-danger">Figura no válida.</div>';
                }
                ?>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>