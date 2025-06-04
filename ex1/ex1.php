
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Exercício 1: Par ou Ímpar</h2>
        <form method="POST" class="formulario">
            <input type="number" name="numero" placeholder="Digite um número" required>
            <br><br>
            <input type="submit" value="Verificar">
        </form>
        <?php
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            if ($numero % 2 == 0) {
                echo "<div class='resultado'>O número $numero é <strong>PAR</strong>.</div>";
            } else {
                echo "<div class='resultado'>O número $numero é <strong>ÍMPAR</strong>.</div>";
            }
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>