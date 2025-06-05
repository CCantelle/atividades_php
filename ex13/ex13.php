<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Hipotenusa</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Calculadora de Hipotenusa</h2>
        <form method="POST" class="formulario">
            <input type="number" name="catetoA" placeholder="Cateto 1 (a)" step="0.01" required><br>
            <input type="number" name="catetoB" placeholder="Cateto 2 (b)" step="0.01" required><br>
            <input type="submit" value="Calcular Hipotenusa">
        </form>

        <?php
        if (isset($_POST['catetoA']) && isset($_POST['catetoB'])) {
            $catetoA = floatval($_POST['catetoA']);
            $catetoB = floatval($_POST['catetoB']);
            $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));
            echo "<div class='resultado'>";
            echo "A hipotenusa é: <strong>" . number_format($hipotenusa, 2, ',', '.') . "</strong>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>