<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de figura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow custom-card">
            <h2 class="text-center mb-4">Selector de figura</h2>
            <form action="./introducir_lados.php">
                <div class="form-floating mb-4">
                    <select class="form-select" id="floatingSelect" name="figura" aria-label="Floating label select example" required>
                        <option value="" disabled selected>Figura sin seleccionar</option>
                        <option value="cuadrado">Cuadrado</option>
                        <option value="rectangulo">Rectángulo</option>
                        <option value="triangulo">Triángulo</option>
                        <option value="circulo">Circulo</option>
                    </select>
                    <label for="floatingSelect">Selecciona una figura</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if (isset($_GET['figura'])) {
    $_SESSION['figura'] = $_GET['figura'];
    // Opcional: redirige a la siguiente página
    // header('Location: introducir_lados.php');
    // exit;
}
?>