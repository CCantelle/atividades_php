<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Empréstimo</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Simulador de Empréstimo</h2>
        <form method="POST" class="formulario">
            <input type="number" step="0.01" name="valor" placeholder="Valor do empréstimo" required><br><br>
            <input type="number" step="0.01" name="juros" placeholder="Taxa de juros mensal (%)" required><br><br>
            <input type="number" name="parcelas" placeholder="Número de parcelas" required><br><br>
            <input type="submit" value="Simular">
        </form>
        <?php
        if (isset($_POST['valor'])) {
            $valor = $_POST['valor'];
            $juros = $_POST['juros'];
            $parcelas = $_POST['parcelas'];
            $totalJuros = $valor * ($juros / 100) * $parcelas;
            $total = $valor + $totalJuros;
            $valorParcela = $total / $parcelas;
            echo "<div class='resultado'>Total com juros: R$ " . number_format($total, 2) . "<br>";
            echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2) . "</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
