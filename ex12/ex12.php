
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio de Desconto</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Sorteio de Desconto</h2>
        <form method="POST" class="formulario">
            <input type="number" name="preco" placeholder="Preço do produto (R$)" step="0.01" min="0.01" required><br>
            <input type="submit" value="Sortear Desconto">
        </form>
        <?php
        if (isset($_POST['preco'])) {
            $precoProduto = floatval($_POST['preco']);
            $desconto = rand(5, 25);
            $valorDesconto = $precoProduto * ($desconto / 100);
            $precoFinal = $precoProduto - $valorDesconto;
            echo "<div class='resultado'>";
            echo "Preço original: <strong>R$ " . number_format($precoProduto, 2, ',', '.') . "</strong><br>";
            echo "Desconto sorteado: <strong>$desconto%</strong><br>";
            echo "Novo preço com desconto: <strong>R$ " . number_format($precoFinal, 2, ',', '.') . "</strong>";
            echo "</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>