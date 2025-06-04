
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">⚖️ Calculadora de IMC</h2>
        <form method="POST" class="formulario">
            <input type="number" name="peso" placeholder="Peso em kg" step="0.1" min="1" required><br><br>
            <input type="number" name="altura" placeholder="Altura em metros (ex: 1.75)" step="0.01" min="0.5" max="3" required><br><br>
            <input type="submit" value="Calcular IMC">
        </form>
        <?php
        if (isset($_POST['peso'], $_POST['altura'])) {
            $peso = floatval($_POST['peso']);
            $altura = floatval($_POST['altura']);
            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                $imcFormatado = number_format($imc, 2);
                if ($imc < 18.5) {
                    $classificacao = "Abaixo do peso";
                } elseif ($imc < 25) {
                    $classificacao = "Peso normal";
                } elseif ($imc < 30) {
                    $classificacao = "Sobrepeso";
                } elseif ($imc < 35) {
                    $classificacao = "Obesidade grau I";
                } elseif ($imc < 40) {
                    $classificacao = "Obesidade grau II";
                } else {
                    $classificacao = "Obesidade grau III";
                }
                echo "<div class='resultado'>IMC: $imcFormatado<br>$classificacao</div>";
            }
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
