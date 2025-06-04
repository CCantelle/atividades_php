
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de dois números</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Soma de dois números</h2>
        <form method="POST" class="formulario">
            <input type="number" name="num1" placeholder="Número 1" required><br><br>
            <input type="number" name="num2" placeholder="Número 2" required><br><br>
            <input type="submit" value="Somar">
        </form>
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $soma = $num1 + $num2;
            echo "<div class='resultado'><strong>Resultado:</strong> $num1 + $num2 = $soma</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
