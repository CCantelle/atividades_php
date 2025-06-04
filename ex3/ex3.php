
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média do Aluno</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Média de 3 notas</h2>
        <form method="POST" class="formulario">
            <input type="number" step="0.01" name="nota1" placeholder="Nota 1" required><br><br>
            <input type="number" step="0.01" name="nota2" placeholder="Nota 2" required><br><br>
            <input type="number" step="0.01" name="nota3" placeholder="Nota 3" required><br><br>
            <input type="submit" value="Calcular Média">
        </form>
        <?php
        if (isset($_POST['nota1'])) {
            $n1 = $_POST['nota1'];
            $n2 = $_POST['nota2'];
            $n3 = $_POST['nota3'];
            $media = ($n1 + $n2 + $n3) / 3;
            echo "<div class='resultado'>Média: " . number_format($media, 2) . "<br>";
            if ($media >= 7) {
                echo "Aluno <strong>APROVADO!</strong>";
            } else {
                echo "Aluno <strong>REPROVADO!</strong>";
            }
            echo "</div>";
        }
        ?>
        <a href="../index.php"><button class="botao-voltar" type="button">Voltar ao Menu</button></a>
    </div>
</body>
</html>
