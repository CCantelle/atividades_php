
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fatorial</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Calcular Fatorial</h2>
        <form method="POST" class="formulario">
            <input type="number" name="num" min="0" placeholder="Digite um número" required><br><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_POST['num'])) {
            $num = $_POST['num'];
            $fatorial = 1;
            for ($i = 1; $i <= $num; $i++) {
                $fatorial *= $i;
            }
            echo "<div class='resultado'>Fatorial de $num é: $fatorial</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
