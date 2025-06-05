<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Censurador de Palavras</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Censurador de Palavras</h2>
        <form method="POST" class="formulario">
            <input type="text" name="frase" placeholder="Digite a frase" required><br>
            <input type="text" name="palavra" placeholder="Palavra a censurar" required><br>
            <input type="submit" value="Censurar">
        </form>
        <?php
        if (isset($_POST['frase']) && isset($_POST['palavra'])) {
            $frase = $_POST['frase'];
            $palavra = $_POST['palavra'];
            $fraseCensurada = str_ireplace($palavra, '***', $frase);
            echo "<div class='resultado'>";
            echo "Frase censurada: <strong>$fraseCensurada</strong>";
            echo "</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>