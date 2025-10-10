<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h2>Selector de figura</h2>
    <hr><br>
    <div>
        
        <form action="./introducir_lados.php">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" >
                    <option value="" disabled selected>Figura sin seleccionar</option>
                    <option value="cuadrado">Cuadrado</option>
                    <option value="rectangulo">Rectángulo</option>
                    <option value="triangulo">Triángulo</option>
                    <option value="circulo">Circulo</option>
                </select>
                <label for="floatingSelect">Selecciona una figura</label>
            </div>
            <br><br>
            <button type="submit">Continuar</button>
            
        </div>
    </form>
</body>
</html>