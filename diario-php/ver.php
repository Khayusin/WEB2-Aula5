<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Diário</title>
</head>
<body>
    <h1>Registros do Diário (diario.md)</h1>
    <hr>

    <div style="background-color: #f4f4f4; padding: 15px; border-radius: 5px;">
        <?php
       
        if (file_exists('diario.md')) {
            echo "<pre style='font-family: inherit; white-space: pre-wrap;'>";
            readfile('diario.md');
            echo "</pre>";
        } else {
            echo "<p>Ainda não há registros no diário.</p>";
        }
        ?>
    </div>

    <br>
    <a href="index.php">Voltar para a página de cadastro</a>
</body>
</html>