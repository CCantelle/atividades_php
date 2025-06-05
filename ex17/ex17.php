<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formatador de Títulos</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Formatador de Títulos</h2>
        <form method="POST" class="formulario">
            <input type="text" name="frase" placeholder="Digite a frase" required><br>
            <input type="submit" value="Formatar Título">
        </form>
        <?php
        if (isset($_POST['frase'])) {
            $frase = strtolower($_POST['frase']);
            $titulo = ucwords($frase);
            echo "<div class='resultado'>Título formatado: <strong>$titulo</strong></div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>