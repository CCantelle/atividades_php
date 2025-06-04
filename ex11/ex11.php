<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de Senha</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Validação de Senha</h2>
        <form method="POST" class="formulario">
            <input type="password" name="senha" placeholder="Digite sua senha" required><br><br>
            <input type="submit" value="Validar">
        </form>
        <?php
        if (isset($_POST['senha'])) {
            $senha = $_POST['senha'];
            if (strlen($senha) >= 8) {
                echo "<div class='resultado'>Senha válida ✅</div>";
            } else {
                echo "<div class='resultado'>Senha inválida ❌ (mínimo 8 caracteres)</div>";
            }
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
