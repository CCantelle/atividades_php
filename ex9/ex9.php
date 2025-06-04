<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Idade</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Calcular Idade</h2>
        <form method="POST" class="formulario">
            <input type="number" name="ano" placeholder="Ano de nascimento" required><br><br>
            <input type="submit" value="Calcular Idade">
        </form>
        <?php
        if (isset($_POST['ano'])) {
            $anoNascimento = $_POST['ano'];
            $anoAtual = date("Y");
            $idade = $anoAtual - $anoNascimento;
            echo "<div class='resultado'>Sua idade é: $idade anos.</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
