<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Extrator de Acrônimo</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Extrator de Acrônimo</h2>
        <form method="POST" class="formulario">
            <input type="text" name="frase" placeholder="Digite a frase" required><br>
            <input type="submit" value="Gerar Acrônimo">
        </form>
        <?php
        if (isset($_POST['frase'])) {
            $frase = trim($_POST['frase']);
            $palavras = explode(' ', $frase);
            $acronimo = '';
            foreach ($palavras as $palavra) {
                if ($palavra !== '') {
                    $acronimo .= substr($palavra, 0, 1);
                }
            }
            $acronimo = strtoupper($acronimo);
            echo "<div class='resultado'>Acrônimo gerado: <strong>$acronimo</strong></div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>