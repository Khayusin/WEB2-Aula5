<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Diário (GET)</title>
</head>
<body>
    <h1>Meu Diário 📖</h1>
    
    <form action="salvar.php" method="GET">
        <label for="entrada">Escreva o que aconteceu hoje:</label><br><br>
        <textarea id="entrada" name="entrada" rows="6" cols="50" required placeholder="Escreva seu diário aqui..."></textarea><br><br>
        
        <button type="submit">Salvar no Diário</button>
    </form>

    <br>
    <a href="ver.php">Ver registros do diário</a>
</body>
</html>