<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Notas do Aluno</title>
</head>
<body>
    <h2>Cadastrar Notas do Aluno</h2>
    
    <!-- Formulário enviando via GET -->
    <form action="salvar_notas.php" method="GET">
        <label for="nome">Nome do Aluno:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="nota1">Nota 1:</label><br>
        <input type="number" step="0.1" id="nota1" name="nota1" required><br><br>

        <label for="nota2">Nota 2:</label><br>
        <input type="number" step="0.1" id="nota2" name="nota2" required><br><br>

        <label for="nota3">Nota 3:</label><br>
        <input type="number" step="0.1" id="nota3" name="nota3" required><br><br>

        <button type="submit">Salvar no arquivo notas.txt</button>
    </form>
</body>
</html>