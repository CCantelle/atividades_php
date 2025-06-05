
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arredondador de Notas</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Arredondador de Notas</h2>
        <form method="POST" class="formulario">
            <input type="number" name="nota" placeholder="Digite a nota (ex: 7.38)" step="0.01" required><br>
            <input type="submit" value="Arredondar">
        </form>
        <?php
        if (isset($_POST['nota'])) {
            $nota = floatval($_POST['nota']);
            $arredondada = round($nota);
            $paraCima = ceil($nota);
            $paraBaixo = floor($nota);
            echo "<div class='resultado'>";
            echo "Nota original: <strong>" . number_format($nota, 2, ',', '.') . "</strong><br>";
            echo "Arredondada (round): <strong>$arredondada</strong><br>";
            echo "Sempre para cima (ceil): <strong>$paraCima</strong><br>";
            echo "Sempre para baixo (floor): <strong>$paraBaixo</strong>";
            echo "</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>