
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Conversor de Temperatura</h2>
        <form method="POST" class="formulario">
            <input type="number" step="0.01" name="temp" placeholder="Temperatura" required><br><br>
            Converter para:
            <select name="tipo">
                <option value="C">Celsius</option>
                <option value="F">Fahrenheit</option>
            </select><br><br>
            <input type="submit" value="Converter">
        </form>
        <?php
        if (isset($_POST['temp'])) {
            $temp = $_POST['temp'];
            $tipo = $_POST['tipo'];
            if ($tipo == "C") {
                $resultado = ($temp - 32) * (5/9);
                echo "<div class='resultado'>$temp °F = " . number_format($resultado, 2) . " °C</div>";
            } else {
                $resultado = ($temp * 9/5) + 32;
                echo "<div class='resultado'>$temp °C = " . number_format($resultado, 2) . " °F</div>";
            }
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
