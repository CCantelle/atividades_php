
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Nome de Usuário</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Gerador de Nome de Usuário</h2>
        <form method="POST" class="formulario">
            <input type="text" name="nome" placeholder="Digite o nome completo" required><br>
            <input type="submit" value="Gerar Usuário">
        </form>
        <?php
        if (isset($_POST['nome'])) {
            $nomeCompleto = trim($_POST['nome']);
            $nomeMinusculo = strtolower($nomeCompleto);
            $usuario = str_replace(' ', '.', $nomeMinusculo);
            echo "<div class='resultado'>Nome de usuário gerado: <strong>$usuario</strong></div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>