
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Tabuada</h2>
        <form method="POST" class="formulario">
            <input type="number" name="num" placeholder="Digite um número" required><br><br>
            <input type="submit" value="Gerar Tabuada">
        </form>
        <?php
        if (isset($_POST['num'])) {
            $num = $_POST['num'];
            echo "<div class='resultado'>Tabuada do $num:<br>";
            for ($i = 1; $i <= 10; $i++) {
                echo "$num x $i = " . ($num * $i) . "<br>";
            }
            echo "</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
